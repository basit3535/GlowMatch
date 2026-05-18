<?php

use App\Http\Controllers\CustomPageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', function () {
//     return view('custom_pages.home');
// })->name('custom_pages.home');


// Route::get('/about', function () {
//     return view('custom_pages.about');
// })->name('custom_pages.about');

Route::get('/',[CustomPageController::class, 'homePage'])->name('show.home_page');

Route::get('/media/{media}/json', function (App\Models\Media $media) {
    return response()->json([
        'id'  => $media->id,
        'url' => Storage::url($media->path),
        'filename' => $media->filename,
    ]);
});
Route::get('seasons/{slug}',[CustomPageController::class, 'showCustomPage'])->name('show.seasons.custom_pages');
Route::post('quiz/save_lead',[CustomPageController::class, 'saveLead'])->name('quiz.save_lead');
Route::get('/{slug}',[CustomPageController::class, 'showCustomPage'])->name('show.custom_pages');
