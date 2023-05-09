<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route view
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/contact', 'contact');

// Route::view('/contact', 'contact', ['nomor' => '0834242', 'negara' => 'Indonesia']);

// // basic route
// Route::get('/menu', function (){
//     return 9*7;

// });


// // redirect

// Route::redirect('/about', '/aboutus');


// // route ID 

// Route::get('/view/{id}', function($id) {
//     return 'ini adalah pengunjung dengan id '.$id;
// });

// Route::get('/variable/{data}', function($data) {
//     return view('data.variable', ['data' => $data]);
// });


// prefix route

// Route::prefix('admin')->group(function () {
//     Route::get('/profile-admin', function(){
//         return 'profile admin';
//     });

//     Route::get('/contact-admin', function(){
//         return 'contact admin';
//     });

//     Route::get('/about-admin', function(){
//         return 'about admin';
//     });

//     Route::get('/about-admin', function(){
//         return 'about admin';
//     });

// });


//home (menu utama )
Route::get('/', function () {
    return view('home', [
        'tittle' => 'home',
        'name' => 'Naufal',
        'biodata' => ['Tono', 'Budi', 'jokowi', 'megachan'],
        'role' => 'Admin'

    ]);
});

//(berfungsi untuk berpindah halaman , misal home ke portofolio dan sebaliknya)
// get('/' (sesuai herf yg ada di navbar))
Route::get('back', function () {
    return view('home', [ //('home' sesuai dengan nama file)
        'tittle' => 'home',
        'name' => 'Naufal',
        'biodata' => ['Tono', 'Budi', 'jokowi', 'megachan'],
        'role' => 'Staff'
    ]);
});


// porto
Route::get('/porto', function () {
    return view('porto', [
        'tittle' => 'porto'
    ]);
});

// project
Route::get('/users', function () {
    return view('users', [
        'tittle' => 'users'
    ]);
});

// reach
Route::get('/reach', function () {
    return view('reach', [
        'tittle' => 'reach'
    ]);
});

// server MT
Route::view('/server', 'server', []);

// GUDANG
Route::view('/gudang', 'gudang', []);

// about
Route::get('/about', function () {
    return view('/about', [
        'tittle' => 'about'
    ]);
});

// cek versi laravel
Route::get('cekversi', function () {
    $laravel = app();
    return "Versi laravelmu adalah " . $laravel::VERSION;
});
