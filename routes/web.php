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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/companies', 'CompanyController@index')->name('companies.index')->middleware('isAdmin');
//Route::get('/companies', 'CompanyController@index')->name('companies.index')->middleware('isAdmin');
Route::get('/companies/{id}/edit','CompanyController@edit')->name('companies.edit')->middleware('isAdmin');
Route::get('/companies/{id}/view','CompanyController@view')->name('companies.view')->middleware('isAdmin');
Route::get('/companies/{id}/delete','CompanyController@destroy')->name('companies.destroy')->middleware('isAdmin');
Route::get('/create','CompanyController@create')->name('companies.create')->middleware('isAdmin');
Route::post('/create','CompanyController@store')->name('companies.store')->middleware('isAdmin');
Route::post('/companies/update','CompanyController@update')->name('companies.update')->middleware('isAdmin');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
// business types
Route::get('/businesstypes', 'BusinesstypeController@index')->name('businesstype.index')->middleware('isAdmin');
Route::get('/businesstypes/{id}/edit', 'BusinesstypeController@edit')->name('businesstype.edit')->middleware('isAdmin');
Route::get('/businesstypes/{id}/delete','BusinesstypeController@destroy')->name('businesstype.destroy')->middleware('isAdmin');
Route::get('/businesstypes/create','BusinesstypeController@create')->name('businesstype.create')->middleware('isAdmin');
Route::post('/businesstypes/create','BusinesstypeController@store')->name('businesstype.store')->middleware('isAdmin');
Route::post('/businesstypes/update','BusinesstypeController@update')->name('businesstype.update')->middleware('isAdmin');
// registry
Route::get('/registrytypes', 'RegistryController@index')->name('registry.viewtypes')->middleware('isAdmin');
Route::get('/registrytypes/{id}/edit', 'RegistryController@edit')->name('registry.edit')->middleware('isAdmin');
Route::get('/registrytypes/{id}/delete','RegistryController@destroy')->name('registry.destroy')->middleware('isAdmin');
Route::get('/registrytypes/create','RegistryController@create')->name('registry.create')->middleware('isAdmin');
Route::post('/registrytypes/create','RegistryController@store')->name('registry.store')->middleware('isAdmin');
Route::post('/registrytypes/update','RegistryController@update')->name('registry.update')->middleware('isAdmin');
Route::post('/addtoregistry','RegistryController@add_to_registry')->name('registry.addcompany')->middleware('isAdmin');
// facility types
Route::get('/facility', 'FacilityController@index')->name('facility.index')->middleware('isAdmin');
Route::get('/facility/{id}/edit', 'FacilityController@edit')->name('facility.edit')->middleware('isAdmin');
Route::get('/facility/{id}/delete','FacilityController@destroy')->name('facility.destroy')->middleware('isAdmin');
Route::get('/facility/create','FacilityController@create')->name('facility.create')->middleware('isAdmin');
Route::post('/facility/create','FacilityController@store')->name('facility.store')->middleware('isAdmin');
Route::post('/facility/update','FacilityController@update')->name('facility.update')->middleware('isAdmin');
// registries
Route::get('/registry/view/{id}', 'RegistryController@find_registry')->name('registry.index');
Route::get('/registry/include','CompanyController@include_company_to_registry')->name('registry.include')->middleware('isAdmin');
Route::post('/registry/include','CompanyController@store_company_to_registry')->name('registry.include')->middleware('isAdmin');
Route::get('/registry/addhscstatus','CompanyInRegistryStatus@addHscStatusCreate')->name('registry.addhscstatus')->middleware('isAdmin');
Route::post('/registry/addhscstatus','CompanyInRegistryStatus@addHscStatusStore')->name('registry.addhscstatus')->middleware('isAdmin');
Route::get('/registry/addstatus','CompanyInRegistryStatus@create')->name('registry.addstatus')->middleware('isAdmin');
Route::post('/registry/addstatus','CompanyInRegistryStatus@store')->name('registry.addstatus')->middleware('isAdmin');
//subjects
Route::get('/subjects', 'SubjectController@index')->name('subject.index')->middleware('isAdmin');
Route::get('/subject/{id}/edit','SubjectController@edit')->name('subject.edit')->middleware('isAdmin');
Route::get('/subject/{id}/view','SubjectController@view')->name('subject.view')->middleware('isAdmin');
Route::get('/subject/{id}/delete','SubjectController@destroy')->name('subject.destroy')->middleware('isAdmin');
Route::get('/subject/create','SubjectController@create')->name('subject.create')->middleware('isAdmin');
Route::post('/subject/create','SubjectController@store')->name('subject.store')->middleware('isAdmin');
Route::post('/subject/update','SubjectController@update')->name('subject.update')->middleware('isAdmin');

Route::get('/status', 'StatusController@index')->name('status.index')->middleware('isAdmin');
Route::get('/status/{id}/edit','StatusController@edit')->name('status.edit')->middleware('isAdmin');
Route::get('/status/{id}/delete','StatusController@destroy')->name('status.destroy')->middleware('isAdmin');
Route::get('/status/create','StatusController@create')->name('status.create')->middleware('isAdmin');
Route::post('/status/create','StatusController@store')->name('status.store')->middleware('isAdmin');
Route::post('/status/update','StatusController@update')->name('status.update')->middleware('isAdmin');

Route::get('/activity', 'ActivityController@index')->name('activity.index')->middleware('isAdmin');
Route::get('/activity/{id}/edit','ActivityController@edit')->name('activity.edit')->middleware('isAdmin');
Route::get('/activity/{id}/delete','ActivityController@destroy')->name('activity.destroy')->middleware('isAdmin');
Route::get('/activity/create','ActivityController@create')->name('activity.create')->middleware('isAdmin');
Route::post('/activity/create','ActivityController@store')->name('activity.store')->middleware('isAdmin');
Route::post('/activity/update','ActivityController@update')->name('activity.update')->middleware('isAdmin');

Route::get('/harmonizedsc', 'HarmonizedscController@index')->name('harmonizedsc.index')->middleware('isAdmin');
Route::get('/harmonizedsc/{id}/edit','HarmonizedscController@edit')->name('harmonizedsc.edit')->middleware('isAdmin');
Route::get('/harmonizedsc/{id}/delete','HarmonizedscController@destroy')->name('harmonizedsc.destroy')->middleware('isAdmin');
Route::get('/harmonizedsc/create','HarmonizedscController@create')->name('harmonizedsc.create')->middleware('isAdmin');
Route::post('/harmonizedsc/create','HarmonizedscController@store')->name('harmonizedsc.store')->middleware('isAdmin');
Route::post('/harmonizedsc/update','HarmonizedscController@update')->name('harmonizedsc.update')->middleware('isAdmin');
