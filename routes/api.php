<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Role;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('/users', 'App\Http\Controllers\UserController')->only('verify','store');
Route::get('/user-verification', 'App\Http\Controllers\UserController@verify')->name('users.verify');

Route::post('/login', 'App\Http\Controllers\AuthCOntroller@login')->name('auth.login');
Route::get('/logout', 'App\Http\Controllers\AuthCOntroller@logout')->name('auth.logout');

Route::group([
    'middleware' => [
        'auth.session',
        'verified'
    ]
], function(){
    // Authenticated URLS
    Route::get('/me', 'App\Http\Controllers\MeController')->name('users.me');
    Route::apiResource('/feedbacks', 'App\Http\Controllers\FeedbackController')->only(['store']);
    Route::apiResource('/ticket-types', 'App\Http\Controllers\TicketTypeController')->only(['index']);
    Route::apiResource('/tickets', 'App\Http\Controllers\TicketController')->only(['store']);
    Route::apiResource('/profiles', 'App\Http\Controllers\ProfileController')->only(['store', 'update']);
    Route::apiResource('/uploads', 'App\Http\Controllers\UploadController')->only(['store', 'index']);
    Route::apiResource('/campaign-idea-options', 'App\Http\Controllers\CampaignIdeaOptionsController')->only(['index']);
    Route::apiResource('/platforms', 'App\Http\Controllers\PlatformController')->only(['index']);
    Route::apiResource('/roles', 'App\Http\Controllers\RoleController')->only('index');
    Route::apiResource('/campaign-ideas', 'App\Http\Controllers\CampaignIdeaController')->only(['store', 'index', 'destroy']);
    Route::apiResource('/audience-levels', 'App\Http\Controllers\AudienceLevelController')->only('index');
    Route::apiResource('/audiences', 'App\Http\Controllers\AudienceController')->only(['store', 'index', 'destroy']);
    Route::apiResource('/social-contents', 'App\Http\Controllers\SocialContentController')->only(['store', 'index', 'destroy']);

    Route::group(['middleware' => [
        'check.access:' . Role::ADMIN
    ]], function(){
        // Admin Routes
        Route::apiResource('/feedbacks', 'App\Http\Controllers\FeedbackController')->only(['index']);
        
        Route::get('/portals-remove/{portal}/{user}', 'App\Http\Controllers\PortalController@removePortalFromUser');
        Route::get('/portals-assign/{portal}/{user}', 'App\Http\Controllers\PortalController@assignPortalToUser');
        Route::apiResource('/users', 'App\Http\Controllers\UserController')->only('index','show');
    });

    Route::group(['middleware' => [
        'check.access:' . Role::CLIENT
    ]],function (){
        // Client routes
        Route::apiResource('/staffs', 'App\Http\Controllers\StaffController');
    });
});
