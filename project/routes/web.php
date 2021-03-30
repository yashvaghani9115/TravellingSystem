<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/searchpackages', [PackagesController::class, 'searchPackage'])->name('searchPackages');
Route::get('/showpackages/{id}',[HomeController::class,'showPackage']);
Route::get('/packagedetails/{id}',[HomeController::class,'packageDetails']);
Route::post('/bookpackage',[HomeController::class,'bookPackage'])->middleware('auth');
Route::get('/allbooking',[HomeController::class,'allBooking'])->middleware('auth');
Route::group(['middleware'  => ['auth','admin']], function() {
	Route::get('/admin',[DashboardController::class,'dashboard']);
    // below is used for adding the users.
	Route::get('/role-register',[DashboardController::class,'registered']);
	//below route for edit the users detail and update.
	Route::get('/role-edit/{id}',[DashboardController::class,'registeredit']);
	//update button route
	Route::put('/role-register-update/{id}',[DashboardController::class,'registerupdate']);
	//delete route
	Route::delete('/role-delete/{id}',[DashboardController::class,'registerdelete']);
    // below is used for adding the tables.
	Route::get('/tablelist',[CityController::class,'city']);
    //add package in table
    Route::post('/addpackage',[PackageController::class,'addPackage']);
    Route::view('/addpackageform','admin.addPackage');
	//edit package form
	Route::get('editpackage/{id}',[PackageController::class,'showEditPackageForm']);
	//update package
	Route::put('updatepackage/{id}',[PackageController::class,'updatePackage']);
	//delete package
	Route::delete('/deletepackage/{id}',[PackageController::class,'deletePackage']);
	Route::get('/addcity',[CityController::class,'addCity']);
	Route::post('/storecity',[CityController::class,'storeCity']);
	Route::get('/editcity/{id}',[CityController::class,'editCity']);
	Route::put('/updatecity/{id}',[CityController::class,'updateCity']);
	Route::delete('/deletecity/{id}',[CityController::class,'deleteCity']);
	Route::get('/showpackage/{id}',[PackageController::class,'showPackage']);
	Route::get('/bookpkg/{id}',[PackageController::class,'bookPkg']);
});