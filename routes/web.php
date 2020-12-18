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
// rout parameter and name
Route::get('/test', function () {
    return 'welcome from test route';
})->name('a');
Route::get('/show-stringAndId/{id}', function ($id) {
    return 'welcome '.$id. ' argument nessacery';
})->name('b');
Route::get('/show-string/{id?}', function () {
    return 'welcome from rout3';
})->name('c');
Route::get('test', function () {
    return view('test');
});

// name spase use in routs related to controler in the folder 
Route::namespace('Front' )->group(function(){
    Route::get('user','UserController@showUserName');
    Route::get('first', 'FirstController@showFirstController');
    Route::get('firstWithoutMiddelware', 'FirstController@showFirstControllerWithoutMiddelware');
    Route::get('firstMsg', 'FirstController@showFirstControllerMessage');

});

Route::group(['prefix' => 'users' ,'middelware' => 'auth'],function(){ 
    Route::get('/add', function () {// rout in google users/add
        return 'good execute';
    });
    Route::get('show','Front\UserController@showUserName')->middleware('auth');
});
Route::get('login', function () {
    return 'sorry you need to login';
})->name('login');    
Route::resource('news', 'NewsController');
//Route::get('indexPage','Front\UserController@indexPage');
//Route::get('showName','Front\UserController@showdatawithArrayAtribute');
Route::get('objShow','Front\UserController@showwithObject');

Route::get('landing', function () {
return view('landingPage');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
