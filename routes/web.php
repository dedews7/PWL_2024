<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
 });

 Route::get('/world', function () {
    return 'World';
 });
 
 Route::get('/', function () {
    return 'Selamat Datang!';
});

Route::get('/about', function () {
    return 'NIM  : 2341760126 <br>
            Nama : Dewi Sulistiyowati!';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' .$name;
    });
    
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

Route::get('/articles/{id}', function ($id) {
        return "Halaman Artikel dengan ID $id";
    });
    
// Route::get('/user/{name?}', function ($name='Dewi') {
//         return "<h1>Nama saya $name </h1>";
//         });


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


