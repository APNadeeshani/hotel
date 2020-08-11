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

Route::group(['middleware' => 'App\Http\Middleware\Hoteladmin'], function()
{ 
    Route::get('/hotel/admin/edit','availabilitycontroller@editehoteladmin');
    Route::get('/hotel/admin/available','availabilitycontroller@availablehoteladmin');
    Route::post('/availability/save','availabilitycontroller@availabilitysave');
    Route::get('/hotel/admin','availabilitycontroller@loadindex');
    Route::get('/hotel/welcome', function () {
        return view('backend.hoteladmin.welcome');
    }); 
});


Route::get('/h', function () {
    return view('frontend.hotelregistration');
});

Route::get('/','hotelcontroller@loardindexx');
Route::get('/hotel','hotelcontroller@loardindex');
Route::get('/hoteltype/{id}','hotelcontroller@loardtype');
Route::post('/request','hotelcontroller@requestsend');
Route::get('/hotelsdestinations/{id}','hotelcontroller@loarddestinationshotel');
Route::get('/hotel/facilities/{id}','faciliticontroller@loardfacilities');
Route::get('destination/new','destinationcontroller@newdestination');
Route::get('destination','destinationcontroller@loardindex');
Route::post('destination/save','destinationcontroller@destinationsave');
Route::get('hotels/registration','hotelcontroller@hotelregistration');
Route::get('hotels/home','hotelcontroller@hotelshome');
Route::get('/clients','clientcontroller@clientloard');
Route::get('/client/new','clientcontroller@clientnew');
Route::post('search_hotels','advanceseachcontroller@searchbydate');
Route::get('/aboutus','aboutcontroller@aboutloard');
Route::get('/contactus','contactcontroller@contactus');
Route::get('/comingsoon','contactcontroller@comingsoon');
Route::post('/hotelssearchfrom','advanceseachcontroller@searchadvce'); 
Route::post('/hotelstypeadvancefilter','advanceseachcontroller@searchtype');
Route::post('/hotelssearchfromdestination','advanceseachcontroller@htldestination');
Route::post('/contactsave','contactcontroller@contcsv'); 
Route::get('/dayouting','hotelcontroller@dayouting');
Route::post('/hotelssearchdayouting','advanceseachcontroller@searchdayouting'); 
Route::get('/weddinghall','hotelcontroller@weddinghall');
Route::get('/hotel/weddingfacilities/{id}','faciliticontroller@loardweddingfacilities');
Route::post('/search/wedding','advanceseachcontroller@searchwedig');

Route::get('/hotel/info','hotelcontroller@hotelinfopage');
Route::post('hotelinfomation/save','hotelcontroller@savehotelinfo');

Auth::routes();

Route::get('/home', 'homecontroller@index')->name('home');
