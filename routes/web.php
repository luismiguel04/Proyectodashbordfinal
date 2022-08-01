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

/* Route::middleware([
	'auth:sanctum',
	config('jetstream.auth_session'),
	'verified'
])->group(function () {
	Route::get('/dashboard', function () {
		return view('dashboard');
	})->name('dashboard');
}); */
Auth::routes();



Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::resource('cuentas', App\Http\Controllers\CuentaController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
	Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
	Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
	Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
	Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
	Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
	Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
	Route::get('graficas', ['as' => 'pages.graficas', 'uses' => 'App\Http\Controllers\PageController@graficas']);
	Route::get('sensores', ['as' => 'pages.sensores', 'uses' => 'App\Http\Controllers\PageController@sensores']);
	Route::get('cuentas', ['as' => 'cuentas', 'uses' => 'App\Http\Controllers\CuentaController@index']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::patch('cuentas/update', ['as' => 'cuentas.update', 'uses' => 'App\Http\Controllers\CuentaController@update']);
	/* 	Route::delete('/cuentas/{Id}', ['as' => 'cuentas.destroy', 'uses' => 'App\Http\Controllers\CuentaController@destroy']); */
});
Route::resource('pages', App\Http\Controllers\PageController::class)->middleware('auth');
Route::patch('/cuentas/update/{id}', array(
	'as' => 'cuentas.update',
	'middleware' => 'auth',
	'uses' => 'App\Http\Controllers\CuentaController@update'
));
/* Route::delete('/cuentas.destroy/{Id}', array(
	'as' => 'cuentas.destroy',
	'middleware' => 'auth',
	'uses' => 'App\Http\Controllers\CuentaController@destroy'
)); */

/* Route::get('/cuentas.show', array(
	'as' => 'cuentas.show',
	'middleware' => 'auth',
	'uses' => 'App\Http\Controllers\PageController@show'
)); */
/* Route::get('/cuentas.edit/{id}', array(
	'as' => 'cuentas.edit',
	'middleware' => 'auth',
	'uses' => 'App\Http\Controllers\CuentaController@edit'
)); */
Route::delete('/cuentas/destroy/{Id}', array(
	'as' => 'cuentas.destroy',
	'middleware' => 'auth',
	'uses' => 'App\Http\Controllers\CuentaController@destroy'
));