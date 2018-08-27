<?php

use Illuminate\Http\Request;
use App\User;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login')->name('login');
    Route::post('logout', 'AuthController@logout')->name('logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    
});
// Route::post('new/user', 'HomeController@newUser');
// Route::post('new/user', );
Route::get('reviews/laest','API\ReviewController@ReviewsLaest');
Route::resource('organization', 'API\OrganizationController');
Route::resource('teacher', 'API\TeacherController');
Route::resource('review', 'API\ReviewController');
Route::resource('user', 'API\UserController');
