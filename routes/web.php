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
    return view('welcome');
})->name('home');

Route::get('/companies', 'CompanyController@index')->name('companies.index');
Route::get('/companies/{id}/edit','CompanyController@edit')->name('companies.edit');
Route::get('/companies/{id}/delete','CompanyController@destroy')->name('companies.destroy');
Route::get('/create','CompanyController@create')->name('companies.create');
Route::post('/create','CompanyController@store')->name('companies.store');
Route::post('/companies/update','CompanyController@update')->name('companies.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
