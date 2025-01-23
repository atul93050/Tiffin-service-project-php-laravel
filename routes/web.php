<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('service');
}); // First Method for routing

Route::get('/Login',function() {
    return view('login');
});
Route::get('/SignUp', function () {
    return view('sign-up');
});
Route::view('/home','home'); // Second method for routing

// Route::get('/about/{name}', function ($name) {
//     echo $name;
//     return view('about');
// }); 
// First Method for routing


// for redirect to another page

Route::redirect('/home','/');
