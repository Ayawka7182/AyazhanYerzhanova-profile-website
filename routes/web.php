<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;


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
    return view('lab3');
});
Route::get('client/add', function () {
    DB::table('clients')->insert([
        'name'=>'Aya',
        'surname'=>'Yerzhanova',
        'age'=> 19
    ]);
});
