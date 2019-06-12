<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('mailable',function(){
    // $mail = new \App\Mail\MailHandshake;
    // return $mail->render();

    // return new \App\Mail\MailHandshake;
    return new \App\Mail\Greeting('Koramit');
});