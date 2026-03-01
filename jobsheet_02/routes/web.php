<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HanzelController;
use App\Http\Controllers\PhotoController;

Route::get("/restricted", function() {
    return "welcome to restricted area";
})->middleware("check.age");



Route::get("/hello", function() {
    return "hello world";
});

Route::get("/world", function() {
    return "world";
});

// Route::get("/user/{name}", function($name) {
//     return "nama saya : ".$name;
// });

Route::get("/posts/{post}/comments/{comment}", function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get("/user/{name?}", function($name="john") {
//     return "nama saya : " . $name;
// });

Route::get('/user/profile', [UserProfileController::class, 'show'])
    ->name('profile');

Route::get('/test', function () {
    return redirect()->route('profile');
});


Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });

    Route::get('/user/profile', function () {
            // Uses first & second middleware...
    });
});

Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});

Route::middleware('auth')->group(function () {
	Route::get('/user', [UserController::class, 'index']);
	Route::get('/post', [PostController::class, 'index']);
	Route::get('/event', [EventController::class, 'index']);
	
});

Route::redirect("/here", "/there");
Route::get("/hanzel", [HanzelController::class, 'show']);

Route::view("/welcome", "welcome");
Route::view("/welcome2", "welcome", ["name" => "hanzel"]);

//praktikum controller

Route::get("/hello", [WelcomeController::class, 'hello']);

Route::resource('photos', PhotoController::class);

// prak view

Route::get("/greeting", [WelcomeController::class, 'greeting']);