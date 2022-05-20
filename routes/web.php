<?php

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
     return view('frontend.index');
});
Route::get('/survey',function(){
    return view('frontend.survey');
})->name('survey');

Route::group(['namespace' => 'Frontend'], function () {
Route::post('survey_form','SurveyController@survey');
Route::get('/code/{id}', 'SurveyController@code')->name('frontend.code');
});

//Admin
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin','middleware' => 'auth', 'namespace' => 'Backend'], function () {   
  Route::resource('survey','SurveyController');

});