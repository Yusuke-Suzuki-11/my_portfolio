<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
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

Route::get('/', [HomeController::class, 'index']);


Route::group(['prefix' => 'skill'], function ()
{
	Route::get('/new', [SkillController::class, 'new'])->name('skill.new');
	Route::post('/store', [SkillController::class, 'store'])->name('skill.store');
});