<?php

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
    return view('dashboard.index');
});

Route::get('redition/{site}','ReditionController@redition')->name('redition.list.sites');
Route::get('surchages/{site}','SurchargesController@suchargeView')->name('sucharge.list.sites');
