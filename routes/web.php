<?php

use Illuminate\Support\Facades\Route;

// PagesController Routes
Route::get('/', 'PagesController@index')->name('index');
Route::get('/work', 'PagesController@work')->name('work');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/work/{slug}', 'PagesController@show')->name('show');
Route::get('/download', 'PagesController@download')->name('download');

// ContactController Routes
Route::get('/contact', 'ContactFormController@create')->name('contact');
Route::post('/contact', 'ContactFormController@store')->name('contact.store');

// Authentication Route - ['register' => true] to enable user registration
Auth::routes(['register' => true]);

// DashboardController Routes
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/create', 'DashboardController@create')->name('dashboard.create');
Route::post('/dashboard/store', 'DashboardController@store')->name('dashboard.store');
Route::get('/dashboard/edit/{id}', 'DashboardController@edit')->name('dashboard.edit');
Route::put('/dashboard/edit/{id}', 'DashboardController@update')->name('dashboard.update');
Route::delete('/dashboard/{id}', 'DashboardController@destroy')->name('dashboard.destroy');
