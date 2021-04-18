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
    return view('welcome');
});
Route::get('years','YearController@index')->name('years.index');
Route::get('years/{year}','YearController@show')->name('years.show');

Route::get('years/{year}/regions','RegionController@indexByYear')->name('region.indexByYear');
Route::get('years/{year}/regions/{name}','RegionController@showByYearName')->name('region.showByYearName');

Route::get('years/{year}/constituencies','ConstituencyController@indexByYear')->name('constituency.indexByYear');
Route::get('years/{year}/constituencies/{name}','ConstituencyController@showByYearName')->name('constituency.showByYearName');

Route::get('regions','RegionController@index')->name('region.index');
Route::get('regions/{region}','RegionController@show')->name('region.show');

Route::get('constituencies','ConstituencyController@index')->name('constituency.index');
Route::get('constituencies/{constituency}','ConstituencyController@show')->name('constituency.show');

Route::get('parties','PartyController@index')->name('party.index');
Route::get('parties/{party}','PartyController@show')->name('party.show');

Route::get('parties/{party}/representatives','RepresentativeController@indexByParty')->name('representative.indexByParty');
Route::get('parties/{party}/representatives/{name}','RepresentativeController@showByPartyName')->name('representative.showByPartyName');

Route::get('representatives','RepresentativeController@index')->name('representative.index');
Route::get('representatives/{representative}','RepresentativeController@show')->name('representative.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
