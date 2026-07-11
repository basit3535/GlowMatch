<?php

use App\Http\Controllers\CustomPageController;
use App\Http\Controllers\QuizController;
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

Route::prefix('quiz')->middleware(['throttle:60,1'])->group(function () {
    // The main quiz page
    Route::get('/',  fn() => view('quiz'))->name('quiz');
    // AJAX endpoints (no frontend JS can see the calculation logic)
    Route::post('/compute-season',   [QuizController::class, 'computeSeason'])->name('quiz.compute_season');
    Route::post('/evaluate-colour',  [QuizController::class, 'evaluateColour'])->name('quiz.evaluate_colour');
    Route::post('/save-lead', [QuizController::class, 'saveLead'])->name('quiz.save_lead');
});

Route::get('/',[CustomPageController::class, 'homePage'])->name('show.home_page');

Route::get('/media/{media}/json', function (App\Models\Media $media) {
    return response()->json([
        'id'  => $media->id,
        'url' => Storage::url($media->path),
        'filename' => $media->filename,
    ]);
});

Route::get('seasons/{slug}',[CustomPageController::class, 'showCustomPage'])->name('show.seasons.custom_pages');
// Route::post('quiz/save_lead',[CustomPageController::class, 'saveLead'])->name('quiz.save_lead');
Route::get('/fetch-blogs', [CustomPageController::class, 'fetchBlogs'])->name('blog.fetch');
Route::get('/blog/{category}/{slug}',[CustomPageController::class, 'showSingleBlog'])->name('show.single_blog');


Route::get('/{slug}',[CustomPageController::class, 'showCustomPage'])->name('show.custom_pages');

