<?php

use App\Http\Controllers\GalleryController;
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

Route::get('/client1', function () {
    return view('Client.client_test');
});
Route::get('/admin1', function () {
    return view('Admin.admin_index');
});

Route::get('post/create', \App\Http\Livewire\PostCreate::class);

Route::get('post/{slug}', \App\Http\Livewire\Post::class);


Route::get('/admin/gallery', function () {
    return view('Admin.gallery');
});

Route::get('/admin/event', function () {
    return view('Admin.event');
});

Route::resource('gallerys', GalleryController::class);
Route::get('changeStatus', [GalleryController::class, 'changeStatus']);
