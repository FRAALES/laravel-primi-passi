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

    // VERSIONE 1
    //$data = [
    //     'name' => 'Alessandro'
    // ];

    // return view('homepage', $data);

    //VERSIONE 2
    $name = 'Alessandro';
    $surname = 'Franco';

    // $data = compact('name');
    // dd($data);

    return view('homepage', compact('name', 'surname'));
});


Route::get('/headermenu', function() {

    return view('headermenu');
});