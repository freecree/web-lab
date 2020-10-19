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
    //return view('welcome');
    return view('index');
});
//Route::get('/puppies',array('as' => 'puppies', 'uses' => 'Controller@getSomePage'));

Route::get('/{code}', 'Controller@getSomePage');

Route::get('/puppies/{code}', 'Controller@getPuppyPage');

//Route::get('/{code}', 'App\Http\Controllers\Controller@getPage');
//Route::get('/{code}', [Controller::class, '@getPage']);


//Route::view('/', 'index');
