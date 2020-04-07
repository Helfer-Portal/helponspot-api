<?php

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

Route::resource('addresses', Addresses::class);
Route::resource('organisations', Organisations::class);
Route::resource('projects', Projects::class);
Route::resource('qualities', Qualities::class);
Route::resource('requests', Requests::class);
Route::resource('users', Users::class);