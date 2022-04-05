<?php

use App\Http\Middleware\IsUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\task1Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;

Route::get("/",[ task1Controller::class, 'index']);

Route::get("insert-post",[ PostController::class , 'insert' ]);
Route::get("list-post",[ PostController::class , 'list' ])->name('post.list');
Route::post("save-post", [PostController::class, 'savePost'])->name('post.save');

Route::get("employees/list",[EmployeeController::class,'list']);
Route::get("employees/insert",[EmployeeController::class,'insert']);
Route::post("employees/create",[EmployeeController::class,'create']);

Route::prefix("product")->group(function(){
    Route::name("product.")->group(function(){
        Route::get("list", [ProductController::class, 'list'])->name("list");
        Route::get("delete", [ProductController::class, 'delete'])->name("delete");
        Route::get("edit", [ProductController::class, 'edit'])->name("edit");
        Route::post("update", [ProductController::class, 'update'])->name("update");
    });
});

Route::prefix("user")->group(function(){
    Route::name("user.")->group(function(){
        Route::get("login", [UserController::class, 'login'])->name("login");
        Route::post("do-login", [UserController::class, 'dologin'])->name("do-login");
        Route::get("register", [UserController::class, 'register'])->name('register');
        Route::post("do-register", [UserController::class, 'doregister'])->name('do-register');

        
        Route::get("welcome",[UserController::class,'welcome'])->name("welcome");
        
        
    });
});

