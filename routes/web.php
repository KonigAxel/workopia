<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('jobs', JobController::class);


// Route::get('/jobs', [JobController::class, 'index']);
// Route::get('/jobs/create', [JobController::class, 'create']);
// Route::get('/jobs/{id}', [JobController::class, 'show']);
// Route::post('/jobs', [JobController::class, 'store']);





// Route::get('/', function () {
//     return view('welcome');
// });  

// Route::get('/jobs/create', function () {
//     return view('jobs.create');
// })->name('jobs.create');


// Route::get('/test', function () {   
//     return response()->json(['name' => 'John Doe'])->cookie('name', 'Brad');
// });

// Route::get('/download', function () {
//     return response()->download(public_path('favicon.ico'));
// });