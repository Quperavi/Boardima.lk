<?php

use Illuminate\Support\Facades\Route;
use Laravel\Lumen\Routing\Router;
use App\Http\Controllers\authController;
use App\Http\Controllers\BoadingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//pages routing

Route::get('/', function () {
    return view('client/index');
});

Route::get('/single', function () {
    return view('client/singleBoad');
});

Route::get('/dashboard', function () {

    $features = DB::table('features')->get();
    return view('owner/boadAdd', ['features' => $features]);

})->middleware('auth.check')->name('dashboard');

Route::get('/manageBoading', function () {
    return view('owner/boadingManage');

})->middleware('auth.check')->name('manageBoading');

Route::get('/catalogue', function () {
    $features = DB::table('features')->get();
    return view('client/catalogue', ['features' => $features]);
});

Route::get('/login', function () {
    return view('/auth/login');
})->name('login');

Route::get('/register', function () {
    return view('/auth/register');
})->name('register');

//Api calls
Route::post('/api/login', [authController::class,'login'])->name('user_login');
Route::post('/api/register', [authController::class,'register'])->name('user_register');
Route::post('/api/logout', [authController::class,'logout'])->name('logout');

Route::middleware(['web', 'auth.check'])->post('/api/boading/add', [BoadingController::class, 'add'])->name('boading_add');
Route::middleware([ 'auth.check'])->get('/api/boading/list', [BoadingController::class, 'list'])->name('boading_list');

//catalogue data get
Route::post('/api/catalogue', [BoadingController::class,'catalogue'])->name('caalogue_api');

//single data
Route::get('/boading/{boadingId}', [BoadingController::class,'singleView'])->name('projects.show');


