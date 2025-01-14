<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// Models
use App\Models\Comment;
use App\models\Upload;

// Controllers
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CommentController;

// view
Route::get('/', function () {
    return view('welcome');
});

Route::get("/form", function () {
    $datas = Comment::getAllComments();
    return view("form", ['datas' => $datas]);
});

Route::get('/formUpdate/{id?}', function ($id = null) {
    $datas = Comment::getCommentById($id);

    if (!$datas || $id === null) {
        return redirect('/form');
    };
    return view('formUpdate', ['datas' => $datas]);
});

Route::get("/upload", function () {
    return view('/formData');
});

// api route
Route::resource('/api/comment', CommentController::class); // comment
Route::resource('/api/upload', UploadController::class); // upload route
