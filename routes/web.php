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

// Route::get('/', function () {
//     return view('layout');
// });
// Resturant Home page
Route::get('/', 'Base@show')->name('anik');

//Dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Contract Us
Route::post('contract', 'Contract@store');

//Gallery
Route::get('dashboard/add-gallery', 'Gallery@show')->name('add-gallery');
Route::post('/save-gallery', 'Gallery@store');
Route::get('dashboard/remove-gallery', 'Gallery@view')->name('remove-gallery');
Route::get('/image-delete/{gallery_id}', 'Gallery@delete');

//Chefs
Route::get('dashboard/add-chef', 'Chef@show')->name('add-chef');
Route::post('/save-chef', 'Chef@store');
Route::get('dashboard/remove-chef', 'chef@view')->name('remove-chef');
Route::get('/chefimage-delete/{chef_id}', 'chef@delete');

//Menu
Route::get('dashboard/add-menu', 'Menu@show')->name('add-menu');
Route::post('/save-menu', 'Menu@store');
Route::get('dashboard/remove-menu', 'Menu@view')->name('remove-menu');
Route::get('/menu-delete/{iteam_id}', 'Menu@delete');
Route::get('/menu-edit/{iteam_id}', 'Menu@edit')->name('edit-menu');
Route::post('/update-menu/{iteam_id}', 'Menu@update');
