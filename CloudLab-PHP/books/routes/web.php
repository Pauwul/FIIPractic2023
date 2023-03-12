<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/oof', function () {
    return view('oof');
});

Route::get('/create', function () {
    return "<form action='create' method='POST'>" . csrf_field() . "
    <input type='text' name='name'>
    <input type='text' name='email'>
    <input type='text' name='password'>
    <input type='submit' value='Create'>
    </form>";
    
});
Route::post('/create', function (Request $request) {
    dd($request);
});

Route::get('book/show/{id?}', function ($id = 'default') {
    return "Book ID: $id";
});