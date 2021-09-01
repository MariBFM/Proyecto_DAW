<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\MessagesController;

/*Welcome<-login*/
Route::view('/','welcome')->name('welcome');

Route::view('/crearEvento','crearEventos')->name('crearEventos');
Route::post('/events',[EventsController::class, 'save'])->name('create_event');

Route::get('/events/{event}/editar',[EventsController::class, 'edit'])->name('edit_event');
Route::patch('/events/{event}',[EventsController::class,'update' ])->name('update_event');

Route::get('/events',[EventsController::class, 'show'])->name('events');
Route::delete('/events/{event}',[EventsController::class, 'drop'])->name('drop_event');

Route::view('/perfil','configuracion')->name('configuracion');
Route::post('/perfil',[UserController::class, 'update'])->name('update_user');

Route::get('image-upload',[ImageUploadController::class, 'upload'])->name('image.upload');
Route::post('image-upload',[ImageUploadController::class, 'uploadPost'])->name('image.upload.post');

Route::view('/info','footer.info');
Route::view('/help','footer.help');
Route::view('/terms','footer.terms');

Route::get('contact',[MessagesController::class, 'index'])->name('contact.index');
Route::post('contact',[MessagesController::class, 'store'])->name('contact.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
