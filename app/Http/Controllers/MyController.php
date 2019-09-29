<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function cubeNumber() {
    	$results = range(0,9);
    	$type = 'number';
    	return view('cube', compact('results','type'));
    }

    public function cubeLetter() {
    	$results = range('a','z');
    	$type = 'letter';
    	return view('cube', compact('results','type'));
    }
}
