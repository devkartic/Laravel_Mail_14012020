<?php

use App\Jobs\SendMailJob;
use Carbon\Carbon;

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


Route::get('/sendMail', function () {
    $job = (new SendMailJob())->delay(Carbon::now()->addSeconds(10));
    dispatch($job);
    return 'Email sent successfully';
});


