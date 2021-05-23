<?php

use App\Models\Location;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $locations = DB::table('locations')->get();
    //return $locations;
    return view('welcome', compact('locations'));

});

Route::get('/locations', function () {

    $locations = Location::all();
    //return $locations;
    return view('locations.index', compact('locations'));

});

Route::get('/locations/{id}', function ($id) {

    $location = Location::find($id);
    //return $locations;
    return view('locations.show', compact('location'));

});
