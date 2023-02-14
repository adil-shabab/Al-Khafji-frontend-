<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControlller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ThreedController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\InteriorthreedController;



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


Route::get('account/login', function () {
    return view('login');
});

Route::get('account/3d', [ThreedController::class, 'index']);
Route::get('account/form-3d', [ThreedController::class, 'threed_form']);
Route::post('account/add-3d', [ThreedController::class, 'store']);
Route::delete('account/delete-3d/{id}', [ThreedController::class, 'destroy']);


Route::get('account/3d/interior', [InteriorthreedController::class, 'index']);
Route::get('account/form-3d/interior', [InteriorthreedController::class, 'threed_form']);
Route::post('account/add-3d/interior', [InteriorthreedController::class, 'store']);
Route::delete('account/delete-3d/interior/{id}', [InteriorthreedController::class, 'destroy']);


Route::post('account/add-gallery', [GalleryController::class, 'store']);
Route::get('account/galleries', [GalleryController::class, 'galleries']);
Route::get('account/form-gallery', [GalleryController::class, 'gallery_form']);
Route::delete('account/delete-gallery/{id}', [GalleryController::class, 'destroy']);


Route::post('sent/message', [ContactController::class, 'store']);
Route::get('account/messages', [ContactController::class, 'messages']);
Route::get('account/form-message', [ContactController::class, 'message_form']);
Route::delete('account/delete-message/{id}', [ContactController::class, 'destroy']);



Route::get('account/projects',[ProjectsController::class,'index']);
Route::get('account/create/project',function(){
    return view('admin.project-form');
});
Route::post('account/post/project',[ProjectsController::class,'store']);
Route::delete('account/delete/project/{id}',[ProjectsController::class,'destroy']);


Route::post('account/login', [UserControlller::class, 'login']);
Route::get('account/form/login', [UserControlller::class, 'login_form']);
Route::get('account/', [ProductController::class, 'index']);
Route::get('account/logout', [UserControlller::class, 'logout']);






Route::get('/', [ProductController::class, 'home']);
Route::get('/about', [ProductController::class, 'about']);
Route::get('/projects', [ProductController::class, 'projects']);
Route::get('/services', [ProductController::class, 'services']);
Route::get('/threed', [ProductController::class, 'threed']);
Route::get('/contact', [ProductController::class, 'contact']);
Route::get('/project/{id}', [ProductController::class, 'inner_project']);
