<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectLinkController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/services', 'services')->name('services');
Route::view('/why-us', 'why-us')->name('why-us');
Route::view('/projects', 'projects')->name('projects');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.submit');
Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');
Route::get('/{project}', ProjectLinkController::class)
    ->where('project', collect(Config::get('projects', []))->pluck('id')->join('|'))
    ->name('project.link');
