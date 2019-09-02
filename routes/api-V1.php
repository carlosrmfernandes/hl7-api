<?php

use Illuminate\Http\Request;

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */
$version = "V1";

Route::get('/', function () {
    return "API RODANDO";
});

Route::group(['middleware' => ['api'], 'prefix' => $version], function () {
    Route::resource('message', 'MessageController');
    Route::get('/get_hospital/{id?}', 'ServicesAvailableHospitalsController@get');
    Route::post('/delete_hospital', 'ServicesAvailableHospitalsController@destroy');
    Route::post('/criar_hospital', 'ServicesAvailableHospitalsController@create');
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});





