<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddNewArticleController;

Route::get('/', function () {
    return view('Home');
})-> name('Home');

Route::get('/about', function () {
    return view('About');
})-> name('About');

Route::get('/addnewarticle', function () {
    return view('AddNewArticle');
})-> name('AddNewArticle');

Route::get('/addnewarticle/all/{id}/delete', [AddNewArticleController::class, 'deleteArticle'])-> name('Article-delete');
Route::post('/addnewarticle/all/{id}/update', [AddNewArticleController::class, 'updateArticleSubmit'])-> name('Article-update-submit');
Route::get('/addnewarticle/all/{id}/update', [AddNewArticleController::class, 'updateArticle'])-> name('Article-update');
Route::get('/addnewarticle/all/{id}', [AddNewArticleController::class, 'showOneArticle'])-> name('Articles-data-one');
Route::get('/addnewarticle/all', [AddNewArticleController::class, 'allData'])-> name('Articles-data');
Route::post('/addnewarticle/submit', [AddNewArticleController::class, 'Submit'])-> name('AddNewArticleForm');
