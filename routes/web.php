<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/'  , [\App\Livewire\Client\Home::class , 'render']);


Route::prefix('admin')->group(function (){
    Route::get('/dashboard',[\App\Livewire\Admin\Dashboard::class , 'render' ]);
    Route::get('/portfolio',[\App\Livewire\Admin\Portfolio::class , 'render' ]);
    Route::get('/new-portfolio',[\App\Livewire\Admin\NewPortfolio::class , 'render' ]);
});
