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

use App\Mail\newLaravel;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('envio-email', function(){
    $user = new stdClass();
    $user->name = 'Marton Padilha';
    $user->email = 'martonpad@gmail.com';
    // return new newLaravel($user);
    Mail::send(new newLaravel($user));
});
