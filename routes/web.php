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

Route::group(['prefix' => 'admin'], function(){
	Route::get('/','LoginController@index');
	Route::post('/login','LoginController@loginPost');
	Route::get('/logout','LoginController@logoutPost');

	Route::get('/dashboard','AdminController@index');
	Route::get('/data','AdminController@data');
	Route::get('/dataadmin','AdminController@dataAdmin');
	Route::post('/store','AdminController@storeAdmin');
	Route::post('/updatepass','AdminController@updatePass');
	Route::post('/update','AdminController@updateAdmin');
	Route::get('/delete/{id}','AdminController@deleteAdmin');
	Route::post('/deleteall','AdminController@deleteAll');
	Route::get('/cari','AdminController@filter');
	Route::get('/excel','AdminController@excel');
	Route::get('/excel/{awal}/{akhir}','AdminController@excelFilter');
});

Route::get('booking','BookingController@index');
Route::get('tanggal','BookingController@tanggal'); 
Route::get('waktu','BookingController@waktu');
Route::get('formidentitas','BookingController@form');
Route::post('proses','BookingController@prosesBooking');
Route::get('/{token}','BookingController@result');
Route::get('print/{token}','BookingController@printBooking');