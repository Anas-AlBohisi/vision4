<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function(){
//     return 'Home Page';
// });
// Route::post('news', function(){
//     return 'News Page';
// });
// Route::put('news', function(){
//     return 'News Page';
// });
// Route::delete('news', function(){
//     return 'News Page';
// });
// Route::get('news', function(){
//     return 'News Page';
// });
