<?php

use App\Http\Controllers\EmployeeInsertController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserAuth;
use PHPUnit\TextUI\XmlConfiguration\Group;

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



Route::get('/hello',  array('search' => 'key', function () {
    return "hid";
}));


Route::get('/profile/{id}/{name}', function ($id, $name) {
    return 'This is ' . $name . ' with id: ' . $id;
    //whereNumber() is one of the constraint that 
    //use to give a strict type for parameters to pass in the uri.
    //In this example we want id to be a number
})->whereNumber('id');



//This is default route
Route::get('/', [PagesController::class, 'index'])->name('index');

//This is route group which stay in the same directory
Route::prefix('pages')->group(function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('login', 'login')->name('login');
        Route::get('about', 'about')->name('about');
        Route::get('edit/{id?}', 'edit')->name('edit');
    });
    //This is controller group which stay in the same group
    Route::controller(EmployeeInsertController::class)->group(function () {
        Route::post('create', [EmployeeInsertController::class, 'insert'])->name('create');
        Route::get('register', [EmployeeInsertController::class, 'registerForm'])->name('register');
        Route::put('modify/{id?}',[EmployeeInsertController::class,'modify'])->name('modify');
    });
});


Route::post('user', [UserAuth::class, 'userLogin'])->name('user');
