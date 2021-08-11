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
    return view('pages.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/administrator', function () {
    return view('admin-dashboard.dashboard');
});

Route::get('/social-media-marketing', function () {
    return view('dashboard.social-media-marketing.campaign-ideas');
});

Route::get('/social-media-marketing/campaign-ideas', function () {
    return view('dashboard.social-media-marketing.campaign-ideas');
});

Route::get('/social-media-marketing/target-audience', function () {
    return view('dashboard.social-media-marketing.target-audience');
});

Route::get('/social-media-marketing/social-content', function () {
    return view('dashboard.social-media-marketing.social-content');
});

Route::get('/social-media-marketing/marketing-profile', function () {
    return view('dashboard.social-media-marketing.marketing-profile');
});

Route::get('/social-graphics', function () {
    return view('dashboard.social-graphics');
});

Route::get('/social-education', function () {
    return view('dashboard.social-education');
});

Route::get('/curated-article', function () {
    return view('dashboard.curated-article');
});


Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/password-change', function () {
    return view('pages.password-change');
});

Route::get('/password-reset', function () {
    return view('pages.password-reset');
});

Route::get('/password-success', function () {
    return view('pages.password-success');
});

Route::get('/registration-success', function () {
    return view('pages.registration-success');
});


Route::get('/user-verification', function () {
    return view('pages.user-verification');
});

// settings
Route::get('/settings/access-to-accounts', function () {
    return view('dashboard.settings.accounts-access');
});

Route::get('/messages', function () {
    return view('dashboard.messages.all-messages');
});

Route::get('/feedbacks', function () {
    return view('dashboard.messages.feedbacks');
});

Route::get('/test', function () {
    return view('dashboard.messages.test');
});

Route::get('/all-ticket', function () {
    return view('dashboard.messages.all-ticket');
});

Route::get('/clients', function () {
    return view('dashboard.messages.clients');
});

Route::get('/file-sharing', function () {
    return view('dashboard.file-sharing.file-sharing');
});

Route::get('/client-files', function () {
    return view('dashboard.file-sharing.client-files');
});

Route::get('/portal', function () {
    return view('dashboard.portals.portal');
});

Route::get('/admin-dashboard', function () {
    return view('dashboard.portals.admin-dashboard');
});