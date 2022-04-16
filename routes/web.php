<?php

use App\Http\Controllers\AdminPanel\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminPanelController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Test Comment
*/
// 1- Do something in route
Route::get('/hello', function () {
    return "Hello world";
});

// 2- Call view in route
Route::get('/', function () {
    return view('welcome');
});
// 3- Call controller function
Route::get('/',[HomeController::class,'index'])->name('home');

// 4- Route -> Controller -> View
Route::get('/test',[HomeController::class,'test'])->name('test');

// 5-1 Route with parametr
Route::get('/param1/{id}',[HomeController::class,'param1'])->name('param1');
// 5-2 Route with parametrs
Route::get('/param2/{id1}/{id2}',[HomeController::class,'param2'])->name('param2');

// 4- Route -> Controller -> View
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//************** Admin Panel Routes ***************//

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('',[AdminPanelController::class,'index'])->name('index');

    //************** Admin Category Routes ***************//
    Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function () {

        Route::get('/','index')->name('');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });

    //************** Admin Service Routes ***************//
    Route::prefix('/service')->name('service.')->controller(ServiceController::class)->group(function () {

        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });
    //************** Admin Service Image Gallery Routes ***************//
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {

        Route::get('/{pid}','index')->name('index');
        Route::get('/create/{pid}','create')->name('create');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/show/{pid}/{id}','show')->name('show');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
    });
});

