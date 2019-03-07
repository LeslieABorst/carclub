<?php

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
    return view('index');
})->name('index');


/** Routes for the application. */


Route::get('/discuss', function () {
    return view('discuss');
})->name('discuss');

Route::get('/ethal', function () {
    return view('ethal');
})->name('ethal');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/howto', function () {
    return view('howto');
})->name('howto');

Route::get('/irma', function () {
    return view('irma');
})->name('irma');

Route::get('/membercars', function () {
    return view('membercars');
})->name('membercars');

Route::get('/memberreg', function () {
    return view('memberreg');
})->name('memberreg');

Route::get('/richardson', function () {
    return view('richardson');
})->name('richardson');


/** Redirects for .html pages in case anyone bookmarked them or I missed a link :) */
Route::get('index.html', function () {
    return redirect()->route('index');
});

Route::get('discuss.html', function () {
    return redirect()->route('discuss');
});

Route::get('ethal.html', function () {
    return redirect()->route('ethal');
});

Route::get('events.html', function () {
    return redirect()->route('events');
});

Route::get('howto.html', function () {
    return redirect()->route('howto');
});

Route::get('irma.html', function () {
    return redirect()->route('irma');
});

Route::get('membercars.html', function () {
    return redirect()->route('membercars');
});

Route::get('memberreg.html', function () {
    return redirect()->route('memberreg');
});

Route::get('richardson.html', function () {
    return redirect()->route('richardson');
});