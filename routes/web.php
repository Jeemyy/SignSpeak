<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function(){
  return "test is success";
});

Route::get('/test', function(){
  return view('test');
});

Route::get('/home', function(){
  return view('home');
});

Route::get('/signin', function(){
  return view('signin');
});

Route::get('/signup', function(){
  return view('signup');
});