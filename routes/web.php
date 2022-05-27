<?php

use Illuminate\Support\Facades\Route;
 
use Helaplus\laravelchapchap\Http\Controllers\MwanzoController;

Route::get('/mwanzo', [MwanzoController::class, 'index'])->name('mwanzo');