<?php

use App\Http\Controllers\ComicController;
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
    $menuLinks = config("data.menuLinks");
    $infoComic = config("data.infoComic");
    return view('home', [
        'menuLinks' => $menuLinks,
        'infoComic' => $infoComic,

        
    ]);
});



Route::resource("comics", ComicController::class);


