<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ShowController;



Route::get('/', function(){
    return view('welcome');
})->name('welcome');

Route::get('blog', [PostController::class, 'toBlog'])
    ->name('blog');


Route::get('/globale', function () {
    return $_GET;
});

Route::get('/globale', function (Request $request) {
    return $request;
});

Route::get('new', function() {
    return [
        'welcome' => route('welcome'),
        'hello' => route('hello')
    ];
})->name('new');

Route::get('vers-welcome', function() {
    return redirect()->route('welcome');
})->name('vers-welcome');

Route::get('/hello/{name}', function (string $name) {
    return 'Hello ' . $name;
});



//PREFIXE

Route::prefix('post')->name('post.')->group(function(){

    Route::get('/hello', [PostController::class, 'hello'])->name('hello');

    Route::get('/show/{slug}-{id}', [ShowController::class, 'show'])
    ->where(['id' => '[0-9]+', 'slug' => '[a-z-]+'])
    ->name('show');

    Route::get('/data', [DataController::class, 'showData'])->name('data');

});