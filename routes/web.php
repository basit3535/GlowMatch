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

Route::controller(CustomPageController::class)->group(function () {

    Route::get('/', 'showCustomPage')->name('show.home_page');
    Route::get('/about', 'showCustomPage')->name('show.about_page');
    Route::get('/12-colour-seasons', 'showCustomPage')->name('show.seasons_page');
    Route::get('/body-types', 'showCustomPage')->name('show.body_types_page');
    Route::get('/blog', 'showCustomPage')->name('show.blog_page');
    Route::get('/contact', 'showCustomPage')->name('show.contact_page');
    Route::get('/color-analysis-by-season', 'showCustomPage')->name('show.color_analysis_page');
    Route::get('/privacy-policy', 'showCustomPage')->name('show.privacy_policy_page');
    Route::get('/terms-of-service', 'showCustomPage')->name('show.terms_of_service_page');
    Route::get('/cookie-policy', 'showCustomPage')->name('show.cookie_policy_page');
    Route::get('/accessibility', 'showCustomPage')->name('show.accessibility_page');
});

 Route::get('seasons/{slug}', 'showCustomPage')->name('show.seasons.custom_pages');
    Route::get('/fetch-blogs', 'fetchBlogs')->name('blog.fetch');
    Route::get('/blog/{category}/{slug}', 'showSingleBlog')->name('show.single_blog');

