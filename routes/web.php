<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\OIDCController;
use App\Http\Controllers\RadiusController;
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
    return view('home');
})->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});

Route::get('/oidc', function () {
    return view('oidc');
})->name('oidc');

Route::get('/radius', function () {
    return view('radius');
})->name('radius');

Route::get('/saml', function () {
    return view('saml');
})->name('saml');

Route::get('/error', function () {
    return view('error');
})->name('error');

Route::get('/logout', [Controller::class, 'logout'])->name('logout');

Route::post('/radius/login', [RadiusController::class, 'login'])->name('radius-login');

