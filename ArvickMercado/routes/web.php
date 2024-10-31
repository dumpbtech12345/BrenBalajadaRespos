<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/arvickmercadoresume', [ProfileController::class, 'showResume'])->name('arvick.resume');
