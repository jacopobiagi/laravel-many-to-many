<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController; 

Route::get('/', [ProjectController :: class, 'index']) ->name('project.index');
Route::get('/users/create', [ProjectController :: class, 'create']) ->name('project.create');
Route::post('/users', [ProjectController :: class, 'store']) ->name('project.store');
Route::get('/users/{id}/edit', [ProjectController :: class, 'edit']) ->name('project.edit');
Route::put('/users/{id}', [ProjectController :: class, 'update']) ->name('project.update');