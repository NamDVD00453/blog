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
//Route::get('/products', 'ProductController@index');
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/register', function () {
//    return view('register');
//});
//Route::get('/login', function () {
//    return view('login');
//});
//Route::get('/dangki', 'RegisterController@register');
//
//Route::get('/admincp', function () {
//    return view('admincp');
//});

Route::get('/student', 'StudentsController@listStudent');

Route::get('/student/add', function () {
    return view('add');
});

Route::post('student/insert','StudentsController@insert');

Route::get('student/delete/{id}','StudentsController@delete');

Route::get('student/update/{id}', 'StudentsController@updateStudent');

Route::post('student/update/{id}','StudentsController@update');



