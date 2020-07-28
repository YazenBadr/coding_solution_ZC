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

Route::get('/coding_task', 'CodingTaskController@get_coding_task_view')->name('coding_task');
Route::post('/coding_task_upload', 'CodingTaskController@process_coding_task_upload')->name('coding_task_upload');

Route::get('/database_task', 'DatabaseTaskController@get_database_task_view')->name('database_task');
