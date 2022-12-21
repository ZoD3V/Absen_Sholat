<?php

use Illuminate\Support\Facades\Route;

// import backend contoller
use App\Http\Controllers\Backend\UserController as BackendUserController;
use App\Http\Controllers\Backend\AbsenController;
use App\Http\Controllers\Backend\SholatController;

// user
Route::get('/backend/manage/user', [BackendUserController::class, 'index'])->name("backend.manage.user");
Route::get('/backend/create/user', [BackendUserController::class, 'create'])->name("backend.create.user");
Route::post('/backend/create/process/user', [BackendUserController::class, 'create_process'])->name("backend.create.process.user");
Route::get('/backend/edit/user/{id?}', [BackendUserController::class, 'edit'])->name("backend.edit.user");
Route::post('/backend/edit/process/user', [BackendUserController::class, 'edit_process'])->name("backend.edit.process.user");
Route::delete('/backend/destroy/process/user/{id?}', [BackendUserController::class, 'destroy'])->name("backend.destroy.process.user");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/backend/manage/absen', [AbsenController::class, 'index'])->name("backend.manage.absensi");
Route::get('/backend/create/absen', [AbsenController::class, 'create'])->name("backend.create.absensi");
Route::post('/backend/create/process/absen', [AbsenController::class, 'create_process'])->name("backend.manage.create.process.absensi");
Route::get('/backend/edit/absen/{id?}', [AbsenController::class, 'edit'])->name("backend.manage.edit.absen");
Route::post('/backend/edit/absen/{id?}', [AbsenController::class, 'edit_process'])->name("backend.manage.edit.process.absen");
Route::get('/backend/process/show/absen/{id?}', [AbsenController::class, 'show'])->name("backend.manage.show.absen");
Route::delete('/backend/process/delete/absen/{id?}', [AbsenController::class, 'destroy'])->name("backend.manage.delete.absen");


Route::get('/backend/manage/sholat', [SholatController::class, 'index'])->name("backend.manage.sholat");
