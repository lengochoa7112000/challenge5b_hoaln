<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

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

// index.php
Route::get('/', function () {
    return view('index');
});

// logout.php

Route::get('/logout.php', function () {
    return redirect()->to('login.php')->send();
});

// member.php

Route::prefix('member.php')->group(function () {
    Route::get('/', [HomeController::class, 'member']);
});

// teacher_edit.php

Route::prefix('teacher_edit.php')->group(function () {
    Route::get('/{id}', [HomeController::class, 'teacherEdit']);
    Route::post('/edited', [HomeController::class, 'postEdit']);
});

// login.php

Route::prefix('login.php')->group(function () {
    Route::post('/', [HomeController::class, 'login']);
    Route::get('/', function () {
        return view('login');
    });
});

// profile.php

Route::prefix('profile.php')->group(function () {
    Route::get('/{id}', [HomeController::class, 'profile']);
});

// edit_profile.php

Route::prefix('edit_profile.php')->group(function () {
    Route::get('/{id}', [HomeController::class, 'editProfile']);
    Route::post('/edited', [HomeController::class, 'postEditProfile']);
});

// message.php

Route::prefix('message.php')->group(function () {
    Route::get('/{id}', [HomeController::class, 'sendMessage']);
    Route::post('/{id}/send', [HomeController::class, 'postSendMessage']);
});

// edit_message.php

Route::prefix('edit_message.php')->group(function () {
    Route::get('/{id}', [HomeController::class, 'editMessage']);
    Route::post('/{id}/edit', [HomeController::class, 'postEditMessage']);
});

// message_received.php

Route::prefix('message_received.php')->group(function () {
    Route::get('/{id}', [HomeController::class, 'receivedMessage']);
});

// upload.php

Route::prefix('upload.php')->group(function () {
    Route::get('/', function () {
        return view('upload');
    });
    Route::post('/', [HomeController::class, 'indexUpload']);
});

// exercise.php

Route::prefix('exercise.php')->group(function () {
    Route::get('/', [HomeController::class, 'exercise']);
    Route::get('/{file_name}', [HomeController::class, 'downloadExercise']);
});

// submit_exercise.php

Route::prefix('submit_exercise.php')->group(function () {
    Route::get('/', function () {
        return view('submit_exercise');
    });
    Route::post('/', [HomeController::class, 'indexSubmit']);
});

// view_submit_exercise.php

Route::prefix('view_submit_exercise.php')->group(function () {
    Route::get('/', [HomeController::class, 'viewExercise']);
    Route::get('/{file_name}', [HomeController::class, 'downloadSubmitExercise']);
});

// upload_challenge.php

Route::prefix('upload_challenge.php')->group(function () {
    Route::get('/', function () {
        return view('upload_challenge');
    });
    Route::post('/', [HomeController::class, 'indexUploadChallenge']);
});

// student_challenge.php

Route::prefix('student_challenge.php')->group(function () {
    Route::get('/', [HomeController::class, 'challenge']);
    Route::post('/', [HomeController::class, 'submitChallenge']);
});