<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
use App\User;
use App\Http\Resources\UserResource;
Route::get('/user/{id?}', function ($id) {
    return new UserResource(User::find($id));
});
Route::get('/users', function () {
    return new UserResource(User::all());
});

use App\Teacher;
use App\Http\Resources\TeacherResource;
Route::get('/list-teachers', function () {
    return new TeacherResource(Teacher::all());
});
Route::get('/teacher/{id?}', function ($id) {
    return new TeacherResource(Teacher::find($id));
});

use App\Review;
use App\Http\Resources\ReviewResource;
Route::get('/recent-reviews', function () {
    return new ReviewResource(
        Review::get()->sortBy('id')->take(10)
    );
});
Route::get('/delete-review/{$id?}', function ($id) {
    return new ReviewResource(
        Review::find($id)->delete()
    );
});

use App\Organization;
use App\Http\Resources\OrganizationResource;
Route::get('/organizations', function () {
    return new OrganizationResource(
        Organization::all()
    );
});
Route::get('/organization/{id?}', function ($id) {
    return new OrganizationResource(
        Organization::find($id)
    );
});