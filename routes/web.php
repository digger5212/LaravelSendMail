<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get ('/',[MailController::class,'mailform']);
Route::post ('/send-mail',[MailController::class,'maildata'])->name('send_mail');
