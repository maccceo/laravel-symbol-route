<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cube/number','MyController@cubeNumber');

Route::get('/cube/letter','MyController@cubeLetter');