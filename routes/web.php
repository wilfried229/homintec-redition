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

Route::get('redition/{site}','web\ReditionWebController@redition')->name('redition.list.sites');
Route::get('redition2/{site}','web\ReditionWebController@redition2')->name('redition2.list.sites');
Route::get('redition-uemoi/{site}','web\ReditionWebController@reditionuemoi')->name('redition.uemoi.list.sites');

Route::get('surchages/{site}','web\SurchargeWebController@suchargeView')->name('sucharge.list.sites');
Route::get('surchages2/{site}','web\SurchargeWebController@suchargeView2')->name('sucharge2.list.sites');
Route::get('surchages/uemoi/{site}','web\SurchargeWebController@suchargeVieUemio')->name('suchargeVieUemio.list.sites');

Route::get('test','TestController@test');
