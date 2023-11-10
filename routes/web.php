<?php

use Illuminate\Support\Facades\Route;
use App\Models\Schools;
use App\Models\Teachers;
use App\Http\Controllers\SchoolsController;
use App\Http\Controllers\TeachersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index',[
        "pagetitle" => "Home",
    "maintitle" => "",
    "ActiveMain"=> "active ",
    "ActiveMaintext"=>" bg-secondary rounded text-white"
    ]);
});
Route::view('/tentangkita', 'tentangkita',[
    "pagetitle" => "About",
    "maintitle" => "About My Library",
    "ActiveAbout"=> "active ",
    "ActiveAbouttext"=>"  bg-secondary rounded text-white"
]
);
Route::get('/schoolseeing',[SchoolsController::class,'index']);
Route::get('/schoolseeing/{id}', [SchoolsController::class,'bruh']);
Route::get('/ViewTeacher',[TeachersController::class,'index']);
Route::get('/ViewTeacher/{id}', [TeachersController::class,'bruh']);
Route::view('/help', 'help',[
    "pagetitle" => "About",
    "maintitle" => "About My Library",
    "ActiveContact"=> "active",
    "Activecontacttext"=>" bg-secondary rounded text-white"
]
);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
