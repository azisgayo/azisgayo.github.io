<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
// Route::get('/', fn () => view('home'));

// Route::get('/', function () {
//     return view('home');
// });
 
Route::get('profile', function () {
    $name = "Aziz";
    return view('profile',[
        'name' => $name 
    ]);

});
 