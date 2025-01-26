<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostStatusController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\ReactionTypeController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('employees/{id}/{ssn?}' , function($id , $ssn=0){
    $data = compact('id' , 'ssn');
    return view('single_employee' , $data);
});

Route::view('employees', 'employees');
Route::view('services' , 'static.services');
Route::view('about' , 'static.about');

Route::fallback(function (){
    return view('static.404');
});

//Database
Route::resource('pst_users', UserController::class);
Route::resource('pst_posts', PostController::class);
Route::resource('pst_comments', CommentController::class);
Route::resource('pst_post_statuses', PostStatusController::class);
Route::resource('pst_reactions', ReactionController::class);
Route::resource('pst_reactions_types', ReactionTypeController::class);
Route::resource('pst_replies', ReplyController::class);