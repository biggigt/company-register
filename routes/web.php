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

Route::get('/companies', 'CompanyController@index')->name('companies.index')->middleware('isAdmin');
Route::get('/companies/{id}/edit','CompanyController@edit')->name('companies.edit');
Route::get('/companies/{id}/view','CompanyController@view')->name('companies.view');
Route::get('/companies/{id}/delete','CompanyController@destroy')->name('companies.destroy');
Route::get('/create','CompanyController@create')->name('companies.create');
Route::post('/create','CompanyController@store')->name('companies.store');
Route::post('/companies/update','CompanyController@update')->name('companies.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// business types
Route::get('/businesstypes', 'BusinesstypeController@index')->name('businesstype.index');
Route::get('/businesstypes/{id}/edit', 'BusinesstypeController@edit')->name('businesstype.edit');
Route::get('/businesstypes/{id}/delete','BusinesstypeController@destroy')->name('businesstype.destroy');
Route::get('/businesstypes/create','BusinesstypeController@create')->name('businesstype.create');
Route::post('/businesstypes/create','BusinesstypeController@store')->name('businesstype.store');
Route::post('/businesstypes/update','BusinesstypeController@update')->name('businesstype.update');
// registry
Route::get('/registrytypes', 'RegistryController@index')->name('registry.viewtypes');
Route::get('/registrytypes/{id}/edit', 'RegistryController@edit')->name('registry.edit');
Route::get('/registrytypes/{id}/delete','RegistryController@destroy')->name('registry.destroy');
Route::get('/registrytypes/create','RegistryController@create')->name('registry.create');
Route::post('/registrytypes/create','RegistryController@store')->name('registry.store');
Route::post('/registrytypes/update','RegistryController@update')->name('registry.update');
Route::post('/addtoregistry','RegistryController@add_to_registry')->name('registry.addcompany');
// facility types
Route::get('/facility', 'FacilityController@index')->name('facility.index');
Route::get('/facility/{id}/edit', 'FacilityController@edit')->name('facility.edit');
Route::get('/facility/{id}/delete','FacilityController@destroy')->name('facility.destroy');
Route::get('/facility/create','FacilityController@create')->name('facility.create');
Route::post('/facility/create','FacilityController@store')->name('facility.store');
Route::post('/facility/update','FacilityController@update')->name('facility.update');
// registries
Route::get('/registry/view/{id}', 'RegistryController@find_registry')->name('registry.index');
Route::get('/registry/include','CompanyController@include_company_to_registry')->name('registry.include');
Route::post('/registry/include','CompanyController@store_company_to_registry')->name('registry.include');
//subjects
Route::get('/subjects', 'SubjectController@index')->name('subject.index');
Route::get('/subject/{id}/edit','SubjectController@edit')->name('subject.edit');
Route::get('/subject/{id}/view','SubjectController@view')->name('subject.view');
Route::get('/subject/{id}/delete','SubjectController@destroy')->name('subject.destroy');
Route::get('/subject/create','SubjectController@create')->name('subject.create');
Route::post('/subject/create','SubjectController@store')->name('subject.store');
Route::post('/subject/update','SubjectController@update')->name('subject.update');

Route::get('/status', 'StatusController@index')->name('status.index');
Route::get('/status/{id}/edit','StatusController@edit')->name('status.edit');
Route::get('/status/{id}/delete','StatusController@destroy')->name('status.destroy');
Route::get('/status/create','StatusController@create')->name('status.create');
Route::post('/status/create','StatusController@store')->name('status.store');
Route::post('/status/update','StatusController@update')->name('status.update');

Route::get('/activity', 'ActivityController@index')->name('activity.index');
Route::get('/activity/{id}/edit','ActivityController@edit')->name('activity.edit');
Route::get('/activity/{id}/delete','ActivityController@destroy')->name('activity.destroy');
Route::get('/activity/create','ActivityController@create')->name('activity.create');
Route::post('/activity/create','ActivityController@store')->name('activity.store');
Route::post('/activity/update','ActivityController@update')->name('activity.update');

Route::get('/harmonizedsc', 'HarmonizedscController@index')->name('harmonizedsc.index');
Route::get('/harmonizedsc/{id}/edit','HarmonizedscController@edit')->name('harmonizedsc.edit');
Route::get('/harmonizedsc/{id}/delete','HarmonizedscController@destroy')->name('harmonizedsc.destroy');
Route::get('/harmonizedsc/create','HarmonizedscController@create')->name('harmonizedsc.create');
Route::post('/harmonizedsc/create','HarmonizedscController@store')->name('harmonizedsc.store');
Route::post('/harmonizedsc/update','HarmonizedscController@update')->name('harmonizedsc.update');
