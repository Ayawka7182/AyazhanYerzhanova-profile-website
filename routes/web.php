<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;
use App\Models\Post;


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

Route::get('client', function () {
    $client = Client::find(1);
    return $client;
});
Route::get('/post/create', function () {
    DB::table('postss')->insert([
        'title'=>'Aya',
        'body'=>'Yerzhanova'
    ]);
});
Route::get('post', function () {
    $client = post::find(1);
    return $post;
});