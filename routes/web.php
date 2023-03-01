<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function () {
    $name = request()->input('name');
    $email = request()->input('email');
    $message = request()->input('message');
    // dd($data);

    return view('thankyou')->with([
        'name'=>$name,
        'email'=>$email,
        'message'=>$message
    ]);
});

