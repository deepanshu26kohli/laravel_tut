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
Route::get('/deep', function () {
    return view('deep');
});
Route::get('/kohli/{id}/comment/{commentID}', function ($id,$commentID) {
    if($id != null){
        return "<h1>Kohli". $id ."</h1>". $commentID ;
    }
    else{
        return "<h1>Nothing to show</h1>";
    }

})->whereAlpha('commentID')->whereNumber('id');
Route::get('/about', function () {
    return view('about');
});
Route::get('/postsss', function () {
    return view('post');
})->name('mypost');