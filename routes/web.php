<?php

use App\Models\TaskP;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
//    $task1 = TaskP::create([
//        'title' => 'Tasca1',
//        'description' => 'lorem bla bla',
//        'completed' => 0
//    ]);
//    $task2 = TaskP::create([
//        'title' => 'Tasca2',
//        'description' => 'lorem bla bla',
//        'completed' => 1
//    ]);
//    $task3 = TaskP::create([
//        'title' => 'Tasca3',
//        'description' => 'lorem bla bla',
//        'completed' => 0
//    ]);
//    $tasks = [
//        $task1,
//        $task2,
//        $task3
//    ];

    return view('tasks', [
        'tasks' => TaskP::all()
    ]);
});

Route::get('/tasks', function () {
    return view('tasks', [
        'tasks' => []
    ]);
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
