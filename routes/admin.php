<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('users', 'AdminApi\UserController');
Route::apiResource('roles', 'AdminApi\RoleController');
Route::apiResource('permissions', 'AdminApi\PermissionController');
Route::apiResource('blogs', 'AdminApi\BlogController')->middleware('auth');

Route::post('blogs/{blog}/update_image', 'BlogController@updateFeaturedImage')->middleware('auth');

Route::apiResource('categories', 'AdminApi\CategoryController')->middleware('auth');
Route::get('activities/{userId?}', 'AdminApi\ActivityController@index');
