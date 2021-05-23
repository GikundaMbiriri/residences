<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\user\UserDash;
// use App\Http\Livewire\admin\AdminDash;
use App\Http\Livewire\UploadResidence;
use App\Http\Livewire\ShowResidence;
use App\Http\Livewire\admin\UploadCategory;
use App\Http\Livewire\Homepage;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Registration;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Homepage::class)->name('home');

Route::get('residence/{id}', ShowResidence::class)->name('residence.details');
Route::get('contact', ContactComponent::class)->name('contacts');
Route::get('about', AboutComponent::class)->name('about');
Route::get('reg', Registration::class)->name('reg');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Route::get('user/dashboard', UserDash::class)->name('user.dashboard');
    //Jetstream authorization function.
    Route::get('residence', UploadResidence::class)->name('uploadresidence');


    Route::get('admin/category/add', UploadCategory::class)->name('admin.addcategory');
});
// Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {



// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
