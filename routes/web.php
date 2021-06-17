<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\userController;
use App\Http\Controllers\addNewUserController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\deleteUserController;
use App\Http\Controllers\addNewAppController;
use App\Http\Controllers\detailedAppViewController;
use App\Http\Controllers\LaravelCrud;
use App\Http\Models\userInsert; // seda pole Models all, kas see oli vajalik ... kustutada v teha Models alla
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [userController::class, 'users']);
Route::post('/users', [userController::class, 'users']);

Route::get('/home', [homeController::class, 'apps']);
Route::post('/home', [homeController::class, 'apps']);

Route::get('/detailedappview', [detailedAppViewController::class, 'apps']);
// Route::post('/detailedappview', [detailedAppViewController::class, 'view']);
Route::get('detailedappview/{id}', [detailedAppViewController::class, 'view']);


Route::get('/addnewuser', [addNewUserController::class, 'insertform']);
Route::post('add', [addNewUserController::class, 'add']);

Route::get('/addnewapp', [addNewAppController::class, 'insertform']);
Route::post('addapp', [addNewAppController::class, 'add']);

Route::get('/deleteuser', [deleteUserController::class, 'index']);
Route::get('delete/{id}', [deleteUserController::class, 'destroy']);

Auth::routes();

//Route::get('/home', [\App\Http\Controllers\homeController::class, 'index'])->name('home');
