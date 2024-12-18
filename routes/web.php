<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('fileupload');
// });


Route::get('file-upload', [UploadController::class, 'index']);
Route::post('upload', [UploadController::class, 'store']);
