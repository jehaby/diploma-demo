<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::when('*', 'csrf', ['post', 'put', 'patch']);

Route::get('/', function()
{
//    return 'wtf?';
	return View::make('layout');


});


Route::get('contacts', function()
{
    return View::make('contacts');
});

Route::resource('admin/office', 'OfficeController');
Route::resource('admin/client', 'ClientController');
Route::resource('admin/staff', 'StaffController');
Route::resource('admin/record', 'RecordController');
Route::resource('admin/schedule', 'ScheduleController');
Route::resource('admin/service', 'ServiceController');


