<?php

use Illuminate\Support\Facades\Route;

use Helaplus\Laravelchapchap\Http\Controllers\MwanzoController;

Route::get('/mwanzo', [MwanzoController::class, 'index'])->name('mwanzo');