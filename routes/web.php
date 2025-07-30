<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {

    $title = 'Available Jobs';
    $jobs = [
        'Web Dev',
        'PHP developer',
        'Db Admin',
        'Software Engineer',
        'Sys Admin'
    ];

    
    return view('jobs.index', compact('title','jobs'));
})->name('jobs');


Route::get('/jobs/create', function () {
    return view('jobs.create');
})->name('jobs.create');


// Route::get('/test', function () {   
//     return response()->json(['name' => 'John Doe'])->cookie('name', 'Brad');
// });

// Route::get('/download', function () {
//     return response()->download(public_path('favicon.ico'));
// });