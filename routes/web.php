<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Models\projek;

Route::get('/', function(){
    return view ('home', ['title'=>'Home']);
});


Route::get('/home', function(){
    return view ('home', ['title'=>'Home']);
});

Route::get('/about', function () {
    return view('about', ['title'=>'About']);

});

Route::get('/projek', function () {
    return view('projek', ['title'=>'Projek','projeks' => projek::projek()]);
});

Route::get('/projek/artikel', function () {
    return view('outside/artikel', ['title'=>'Artikel','posts' => post::all()]);
} );


Route::get('/contack', function () {
    return view('contack');});

Route::get('/login', function () {
    return view('components/login');});

Route::get('posts/{id}', function ($id) {
    dd($id); 
});

Route::get('/setting', function () {
    return view('outside/setting');});
