<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\SurveyController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
  Route::get('surveies', 'API\SurveyController@index');
  Route::post('surveies', 'API\SurveyController@store');
  Route::put('surveies/{survey}', 'API\SurveyController@update');
  Route::get('surveies/{survey}', 'API\SurveyController@show');
  Route::delete('surveies/{survey}', 'API\SurveyController@destroy');


