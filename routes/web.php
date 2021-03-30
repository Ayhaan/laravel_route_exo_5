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
    return view('home');
});

Route::get('/contact/sav', function () {
    return view('infos/contact/sav');
})->name('sav');

Route::get('/contact/partenariat', function () {
    return view('infos/contact/partenariat');
})->name('part');

Route::get('/contact/info', function () {
    return view('infos/contact/info');
})->name('info');


Route::get('/team/front', function () {
    $fronts = [
        (object)["nom" => 'natchez', 'fonction' => 'mon best', 'photo' => 'img/toast.jpg' ],
        (object)["nom" => 'mohammed', 'fonction' => 'bg', 'photo' => 'img/toast.jpg' ],
        (object)["nom" => 'zulma', 'fonction' => 'tornade', 'photo' => 'img/toast.jpg' ],
        (object)["nom" => 'louise', 'fonction' => 'bg du bled', 'photo' => 'img/toast.jpg' ],
        (object)["nom" => 'adame', 'fonction' => 'a demain', 'photo' => 'img/toast.jpg' ],
    ];
    // dd($fronts);
    return view('team/web/dev/frontend', compact('fronts'));
})->name('front');

Route::get('/team/back', function () {
    $backs = [
        (object)["nom" => 'dawid', 'fonction' => 'mon best', 'photo' => 'img/toast.jpg' ],
        (object)["nom" => 'maxence', 'fonction' => 'bg', 'photo' => 'img/toast.jpg' ],
        (object)["nom" => 'zakaria', 'fonction' => 'tornade', 'photo' => 'img/toast.jpg' ],
        (object)["nom" => 'maximilien', 'fonction' => 'bg du bled', 'photo' => 'img/toast.jpg' ],
    ];
    return view('team/web/dev/backend', compact('backs'));
})->name('back');







