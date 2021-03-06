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

Auth::routes();

Route::post('/register-member', 'MemberController@store');
Route::group(
    [
        'prefix' => 'admin',
        'middleware' => 'auth'
    ],
    function (){
        // resources routing
        Route::resource('member', 'MemberController');

        // admin index view
        Route::get('/', function (){
            return view('admin.index');
        });
    }
);

Route::get('/home', 'HomeController@index')->name('home');