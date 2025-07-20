<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AdminController::class,'home']);

Route::get('/create_room',[AdminController::class,'create_room']);
Route::get('/home',[AdminController::class,'index'])->name('home');
Route::post('/add_room',[AdminController::class,'add_room'])->middleware(['auth','admin']);
Route::get('/view_room',[AdminController::class,'view_room'])->middleware(['auth','admin']);
Route::get('/delete_room/{id}',[AdminController::class,'delete_room'])->middleware(['auth','admin']);
Route::get('/update_room/{id}',[AdminController::class,'update_room'])->middleware(['auth','admin']);
Route::post('/edit_room/{id}',[AdminController::class,'edit_room'])->middleware(['auth','admin']);

Route::get('/room_details/{id}',[HomeController::class,'room_details']);
Route::post('/add_booking/{id}',[HomeController::class,'add_booking']);
Route::get('/bookings',[AdminController::class,'bookings'])->middleware(['auth','admin']);
Route::get('/delete_booking/{id}',[AdminController::class,'delete_booking'])->middleware(['auth','admin']);
Route::get('/approve_book/{id}',[AdminController::class,'approve_book'])->middleware(['auth','admin']);
Route::get('/reject_book/{id}',[AdminController::class,'reject_book'])->middleware(['auth','admin']);
Route::get('/view_gallery',[AdminController::class,'view_gallery'])->middleware(['auth','admin']);
Route::post('/upload_gallery',[AdminController::class,'upload_gallery'])->middleware(['auth','admin']);
Route::get('/delete_gallery/{id}',[AdminController::class,'delete_gallery'])->middleware(['auth','admin']);
Route::post('/contact',[HomeController::class,'contact']);
Route::get('/all_messages',[AdminController::class,'all_messages'])->middleware(['auth','admin']);
Route::get('/send_mail/{id}',[AdminController::class,'send_mail'])->middleware(['auth','admin']);
Route::post('/mail/{id}',[AdminController::class,'mail'])->middleware(['auth','admin']);


Route::get('/our_gallery',[HomeController::class,'our_gallery']);
Route::get('/about_us',[HomeController::class,'about_us']);
Route::get('/our_room',[HomeController::class,'our_room']);
Route::get('/our_blog',[HomeController::class,'our_blog']);
Route::get('/contact_us',[HomeController::class,'contact_us']);