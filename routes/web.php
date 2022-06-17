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
//     return view('welcome');
// });
Route::view('/', 'Pages/index');
Route::view('/About-us', 'Pages/about');
Route::view('/Contact-us', 'Pages/contactus');
Route::view('/Project', 'Pages/project');
Route::view('/Services', 'Pages/services');
Route::view('/Services-Detail', 'Pages/Services-detail');
Route::view('/Faqs', 'Pages/faq');
