@extends('layouts.app')
@section('content')
<form id="boadingaddForm" action="javascript:void(0)" >
    <div class="px-3">

            @csrf
            <div class="">
                <h2 class="fw-bold">
                Student
                </h2>
                <div class="card property-add-card mb-5">
                    <div class="card-body">
                        <h3 class="card-title mb-3">
                            <i class="fa-solid fa-circle-info text-info"></i>
                            Basic Info
                        </h3>

                            <div class="row">
                            <div class="form-group mb-3 col-sm-9">
                                <label class="fw-bold" for="title" >Title</label>
                                <input type="text" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror form-control-lg"  name="title" id="title" aria-describedby="emailHelp" autocomplete="title" placeholder="Enter Title">
                                    @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                            </div>

                            <div class="form-group mb-3 col-sm-3">
                                <label class="fw-bold" for="slots">Slots</label>
                                <input type="number" value="{{ old('slots') }}" class="form-control @error('slots') is-invalid @enderror form-control-lg" name="slots" id="slots" aria-describedby="emailHelp" placeholder="Number of slots">
                                    @error('slots')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="fw-bold" for="category">Select Category</label>
                                        <select name="category" class="form-control js-example-basic-single select-2-selection" id="category">
                                        <option value="1">For Boys</option>
                                        <option value="2">For Girls</option>
                                        <option value="3">Both</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="fw-bold" for="type">Example select</label>
                                        <select name="type" class="form-control js-example-basic-single select-2-selection" id="type">
                                        <option value="1">Apartment</option>
                                        <option value="2">House</option>
                                        <option value="3">Hostel</option>
                                        <option value="4">New Building</option>
                                        <option value="5">Room</option>
                                        <option value="6">Anex</option>
                                        <option value="7">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                    </div>
                </div>

                <div class="card property-add-card mb-5">
                    <div class="card-body">
                        <h3 class="card-title mb-3">
                            <i class="fa-solid fa-location-dot text-info"></i>
                            Location
                        </h3>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="fw-bold" for="distance">Distance From Faculty</label>
                                        <select name="distance" class="form-control js-example-basic-single select-2-selection" id="distance">
                                        <option value="1">Under 1 Km</option>
                                        <option value="2">1Km - 2Km</option>
                                        <option value="3">2Km - 3Km</option>
                                        <option value="4">3Km - 4Km</option>
                                        <option value="5">4Km - 5Km</option>
                                        <option value="6">Above 5Km</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="fw-bold" for="city">Enter City</label>
                                        <input name="city" type="text" value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror form-control-lg" id="city" aria-describedby="emailHelp" placeholder="Enter City">
                                            @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label class="fw-bold" for="address">Enter Address</label>
                                        <input name="address" type="text" value="{{ old('address') }}" class="form-control @error('address') is-invalid @enderror form-control-lg" id="address" aria-describedby="emailHelp" placeholder="Enter Title">
                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="container">

                                <div class="form-group row">
                                    <div class="col-sm-6" hidden>
                                        <label class="fw-bold" class="control-label">Lat.:</label>
                                        <input name="latitude" type="text" class="form-control" id="us3-lat" />
                                    </div>
                                    <div class="col-sm-6 o-hidden" hidden>
                                        <label class="fw-bold">Long.:</label>
                                        <input name="longitude" type="text" class="form-control" id="us3-lon" />
                                    </div>
                                </div>
                                <!-- map -->
                                <label class="fw-bold" for="us3" class="control-label">Display on the map</label>
                                <div id="us3" style="height: 400px;"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card property-add-card mb-5">
                    <div class="card-body">
                        <h3 class="card-title mb-3">
                            <i class="fa-solid fa-circle-info text-info"></i>
                            Property Information
                        </h3>

                            <div class="form-group mb-3 col-sm-6">
                            <label class="fw-bold" for="area">Total area, sq.m</label>
                            <input name="area" type="number" value="{{ old('area') }}" class="form-control @error('area') is-invalid @enderror form-control-lg" id="area" aria-describedby="emailHelp" placeholder="Enter Title">
                                    @error('area')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="exampleFormControlSelect1">Rooms</label>
                                        <br>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input " type="radio" name="rooms" checked id="inlineBathRadio1" value="1">
                                            <label  class="form-check-label fs-4" for="inlineBathRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rooms" id="inlineBathRadio2" value="2">
                                            <label  class="form-check-label fs-4" for="inlineBathRadio2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rooms" id="inlineBathRadio3" value="3" >
                                            <label  class="form-check-label fs-4" for="inlineBathRadio3">3</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rooms" id="inlineBathRadio4" value="4" >
                                            <label  class="form-check-label fs-4" for="inlineBathRadio4">4</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rooms" id="inlineBathRadio5" value="5" >
                                            <label  class="form-check-label fs-4" for="inlineBathRadio5">5+</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-4">
                                        <label  for="exampleFormControlSelect1">Bath Rooms</label>
                                        <br>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input " checked type="radio" name="bathroom" id="inlineRadio1" value="1">
                                            <label  class="form-check-label fs-4" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio2" value="2">
                                            <label  class="form-check-label fs-4" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio3" value="3" >
                                            <label  class="form-check-label fs-4" for="inlineRadio3">3</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio4" value="4" >
                                            <label  class="form-check-label fs-4" for="inlineRadio4">4</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio5" value="5" >
                                            <label  class="form-check-label fs-4" for="inlineRadio5">5+</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row px-2">
                                <label class="fw-bold" for="exampleFormControlSelect1">Features</label>
                                @foreach ($features as $feature)
                                    <div class="form-check form-check-inline col-md-3 fs-5">
                                        <input class="form-check-input"  name="features" type="checkbox" id="inlineCheckbox_{{$feature->id}}" value="{{$feature->id}}">
                                        <label  class="form-check-label d-flex align-items-center" for="inlineCheckbox_{{$feature->id}}">
                                            <div class="d-flex align-items-center justify-content-center rounded-circle border border-danger m-2" style="width: 40px; height: 40px;">
                                                <i class="fa-solid px-2 text-danger {{ $feature->class }}"></i>
                                            </div>
                                            <span class="">{{ $feature->feature_name }}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mb-3">
                                <label class="fw-bold" for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                            </div>

                    </div>
                </div>

                <!-- photos/videos -->
                <div class="card mt-5">
                    {{-- <input type="file" name="images[]" multiple> --}}
                    <div class="card-header h4">Photos/Video</div>
                    <div class="card-body col-sm-12">

                        @error('images')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        <label class="fw-bold" for="desc">The maximum photo size is 2 MB.<br>Maximum File Uploads 12.</label>
                        <div action="javascript:void(0)" class="dropzone" id="multiImages">
                            <div id="drag-drop-area"></div>
                        </div>
                    </div>
                </div>

                <div class="card property-add-card my-5">
                    <div class="card-body">
                        <h3 class="card-title mb-3">
                            <i class="fa-solid fa-dollar text-info"></i>
                            Price
                        </h3>
                            <div class="row">
                            <div class="form-group mb-3 col-sm-9">
                                <label class="fw-bold" for="price">Enter Price For a month</label>
                                <input name="price" type="number" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror form-control-lg" id="price" aria-describedby="emailHelp" placeholder="Enter Price">
                                    @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                            </div>

                    </div>
                </div>
            </div>

        <div>
            <button onclick="addBoading()" class="btn btn-primary col-12">Submit</button>
        </div>
        <!-- map newly added -->
        <input id="searchBox" type="text" placeholder="Search location...">
        <div id="map"></div>


    </div>
</form>


@endsection
