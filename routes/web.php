<?php

use App\Http\Controllers\appcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index',[appcontroller::class,'index'])->name('Home');
Route::get('/echotitle',[appcontroller::class,'echotitle'])->name('echotitle');
Route::get('/phpdate',[appcontroller::class,'phpdate'])->name('phpdate');
Route::get('/phpwhileloop',[appcontroller::class,'phpwhileloop'])->name('phpwhileloop');
Route::get('/phpforloop',[appcontroller::class,'phpforloop'])->name('phpforloop');
Route::get('/phpforeach',[appcontroller::class,'phpforeach'])->name('phpforeach');
Route::get('/phparray',[appcontroller::class,'phparray'])->name('phparray');
Route::get('/menubar',[appcontroller::class,'menubar'])->name('menubar');
Route::get('/stringtoarray',[appcontroller::class,'stringtoarray'])->name('stringtoarray');
Route::get('/myaction',[appcontroller::class,'myaction'])->name('myaction');
Route::post('/action', [appcontroller::class, 'action'])->name('myaction.action');