<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostStatusController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\ReactionTypeController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::fallback(function (){
    return view('static.404');
});

// Route::controller(PostController::class)->prefix('posts')->group(function(){
//     Route::get('date' , 'date');
//     Route::get('time' , 'time');
//     Route::get('year' , 'year');
// });

//Database
Route::get('init' , function(){
    $models =[
    'User',
    'ReactionType',
    'PostStatus',
    'Post',
    'Reaction',
    'Comment',
    'Reply'
    ];

    foreach($models as $model){
        Artisan::call('make:model' , ['name' => $model , '-a' => true]);
        sleep(1);
    }
     echo 'DONE';
});

Route::resources([
    'users'=>UserController::class,
    'posts'=>PostController::class,
    'replies'=>ReplyController::class,
    'reactions'=>ReactionController::class,
    'reaction-type'=>ReactionTypeController::class,
    'post-status'=>PostStatusController::class,
    'comments'=>CommentController::class
]);

