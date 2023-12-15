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

/*Route::get('/', function () {
    return view('welcome');
});*/
//cambiamos
Route::get('/', function () {
    return view('auth.login');
});


//vamos a reescribor esto con la nueva vista
/*Route::middleware(['auth:sanctum',config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/ 

//luego comentamos esto
/*Route::middleware(['auth:sanctum',config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});*/
Route::get('dash','App\Http\Controllers\DashboardController@index');

Route::get('/crud', function(){
    return view('crud.index');
});

Route::get('/crud/create', function(){
    return view('crud.create');
});
