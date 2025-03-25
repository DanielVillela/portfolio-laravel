<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', function () {
    return view('welcome');
});
Route::controller(PageController::class)->group(function () {
    Route::get('/host', 'host')->name('Page.host');
});