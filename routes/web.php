<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
});

Route::get('/', function () {
    $comics = config("comics.dc_comic");
    return view('comics.comics', compact("comics"));
})->name("comics");

Route::get('/comics/{index}', function (string $index) {
    $comics = config("comics.dc_comic");
    if(isset($comics[$index])){
        $comic = $comics[$index];
        return view("comics.show", compact("comic"));
    } else {
        abort(404);
    }
})->name("comic.show");
