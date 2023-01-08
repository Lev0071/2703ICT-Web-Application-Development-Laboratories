<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/form', function () {
    return view('styles.form');
});

Route::get('greetingForm', function () {
    return view('greetingForm');
});
// https://s2921450.elf.ict.griffith.edu.au/webAppDev/week4/task4/greeting_laravel/public/greetingForm

// Route::post('greetingPost', function () {
//     // $name = $_POST["name"];
//     $name = request("name");
//     $age = request("age");
//     echo $name;
//     dd($age);
//     return "Gretting From submitted";
// });

Route::post('greetingPost', function () {
    // $name = $_POST["name"];
    $name = request("name");
    $age = request("age");
    return view('greeting')->with('name',$name)->withAge($age);
});

Route::get('greeting', function () {
    return 'Hola!';
});

Route::get('greeting/{name}', function ($name) {
    return "Hello  $name !";
});
