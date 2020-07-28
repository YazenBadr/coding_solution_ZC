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

Route::get('/', 'HomeController@get_home_view')->name('home');
Route::get('/file_organizer_solution', 'FileOrganizerController@get_file_organizer_view')->name('file_organizer');
Route::post('/file_organizer_uploader', 'FileOrganizerController@process_file_organizer_upload')->name('file_organizer_uploader');
