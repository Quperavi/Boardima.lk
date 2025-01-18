<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\boadings;
use App\Models\boadingImages;
use App\Models\boadingFeatures;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\JsonResponse;

class BoadingController extends Controller
{

    function add(Request $request) : JsonResponse
    {
        try{

            $this->validate($request, [
                'images' => 'required|array',
                'features' => 'sometimes',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'title' => 'required|string|max:200',
                'slots' => 'required|numeric',
                'category' => 'required|in:1,2,3',
                'type' => 'required|in:1,2,3,4,5,6,7,8',
                'distance' => 'required|in:1,2,3,4,5,6',
                'city' => 'required|string|max:200',
                'address' => 'required|string|max:300',
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric',
                'price' => 'required|numeric',
                'area' => 'required|numeric',
                'bathroom' => 'required|in:1,2,3,4,5',
                'rooms' => 'required|in:1,2,3,4,5',
            ]);

            $request->input('description',"");

            $registred =  boadings::create([
                'name' => $request->get('title'),
                'category' => $request->get('category'),
                'slots' => $request->get('slots'),
                'type' => $request->get('type'),
                'distance' => $request->get('distance'),
                'city' => $request->get('city'),
                'address' => $request->get('address'),
                'latitude' => $request->get('latitude'),
                'longitude' => $request->get('longitude'),
                'price' => $request->get('price'),
                'description' =>$request->get('description'),
                'area' => $request->get('area'),
                'bathroom' => $request->get('bathroom'),
                'rooms' => $request->get('rooms'),
                'added_by' => Auth::id(),
            ]);

            if($registred){

                foreach ($request->file('images') as $image) {
                    $fileName = "boaing_img-".time().rand(). '.' . $image->getClientOriginalExtension();
                    $imagePath = $image->storeAs('public/images', $fileName);
                    $imageModel = new boadingImages(['image_name' => $fileName, 'boading_id' => $registred->id]);
                    $imageModel->save();
                }

                if($request->has('features') ){
                    foreach ($request->get('features') as $feature) {
                        $featureModel = new boadingFeatures(['boading_id' => $registred->id, 'feature_id' => $feature]);
                        $featureModel->save();
                    }
                }

            }



            return response()->json([
                'status' => true,
                'message' => 'success',
            ]);

        }catch (\Exception $e){
            return response()->json(['status' => false,'message' => 'Internalserver Error', 'error' => $e->getMessage()]);
        }

    }

    function list(Request $request) : JsonResponse
    {
        try{
            return response()->json([
                'status' => true,
                'data' => boadings::where('added_by', '=', Auth::id())->get(),
            ]);

        }catch (\Exception $e){
            return response()->json(['status' => false,'message' => 'Internalserver Error', 'error' => $e->getMessage()]);
        }

    }

    function catalogue(Request $request) : JsonResponse
    {
        try{

            $this->validate($request, [
                'features' => 'sometimes|array',
                'category' => 'sometimes|in:1,2,3',
                'type' => 'sometimes|array',
                'distance' => 'sometimes|in:1,2,3,4,5,6',
                'min_price' => 'sometimes|integer',
                'max_price' => 'sometimes|integer',
                'latitude' => 'sometimes|numeric',
                'longitude' => 'sometimes|numeric',
            ]);

            //Query Init
            $query = boadings::query();

            //price filter
            if(( $request->filled('min_price') ) &&  ($request->filled('max_price')) ){

                $min_price = $request->min_price;
                $max_price = $request->max_price;
                $query->where('price', '>=', $min_price)
                        ->where('price', '<=', $max_price);
            }

            //Category Filter
            if ($request->filled('category') ) {
                $category = $request->category;
                $query->where('category', '=', $category);
            }

            //Distance Filter
            if ($request->filled('distance') ) {
                $distance = $request->distance;
                $query->where('distance', '=', $distance);
            }

            //Property Type Filter
            $type = $request->type;
            if (count($type) > 0){
                $query->whereIn('type', $type);
            }

            //Features Filter
            $features = $request->features;
            if( count($features) > 0){

                $query->whereHas('features', function ($query) use ($features) {
                    $query->whereIn('feature_id', $features);
                });

            }


            $data = $query->with('features')
            ->with('images')
            ->with('user')
            ->get();

            error_log($data);

            return response()->json(
                $data
             );



        }catch (\Exception $e){
            error_log($e);
            return response()->json(['status' => false,'message' => 'Internalserver Error', 'error' => $e->getMessage()]);
        }

    }

    function singleView($projectId)
    {
        $project = boadings::with('features.feature_items')
        ->with('images')->with('user')->with('user_details')->find($projectId);

        $distance_Arr = [
            '1' => 'Under 1',
            '2' => '1-2 ',
            '3' => '2-3 ',
            '4' => '3-4 ',
            '5' => '4-5 ',
            '6' => '4-5 ',
            '7' => 'Above 5 Km',
        ];

        $property_type = [
            '1' => 'Apartment',
            '2' => 'House',
            '3' => 'Hostel',
            '4' => 'New Building',
            '5' => 'Room',
            '6' => 'Anex',
            '7' => 'Other',
        ];

        // Additional logic for fetching related data if needed
        error_log($project);
        return view('client/singleBoad', ['project' => $project, 'distance_Arr' => $distance_Arr, 'property_type' => $property_type]);
    }
}
