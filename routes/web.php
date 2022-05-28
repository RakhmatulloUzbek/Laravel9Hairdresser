<?php

use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
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
Route::get('/welcome', function () {
    return view('welcome');
});

//************** Home Page Routes ***************//

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name('storecomment');

Route::view('/loginuser','home.login')->name('loginuser');
Route::view('/registeruser','home.register')->name('registeruser');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');

Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/service_detail/{id}',[HomeController::class,'service_detail'])->name('service_detail');

Route::get('/categoryservices/{id}/{slug}',[HomeController::class,'categoryservices'])->name('categoryservices');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//************** Admin Panel Routes ***************//

Route::prefix('/admin')->name('admin.')->group(function () {

    Route::get('/',[AdminPanelController::class,'index'])->name('index');
    Route::get('/login',[AdminPanelController::class,'login'])->name('login');

    Route::get('/setting',[AdminPanelController::class,'setting'])->name('setting');

    Route::post('/setting/update',[AdminPanelController::class,'settingUpdate'])->name('setting.update');

    //************** Admin Category Routes ***************//
    Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function () {

        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });

    //************** Admin service Routes ***************//
    Route::prefix('/service')->name('service.')->controller(ServiceController::class)->group(function () {

        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });

    //************** Admin service Image Gallery Routes ***************//
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {

        Route::get('/{pid}','index')->name('index');
        Route::get('/create/{pid}','create')->name('create');
        Route::post('/store/{pid}','store')->name('store');
        Route::post('/update/{pid}/{id}','update')->name('update');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
    });
    //************** Admin Message Routes ***************//
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {

        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });

    //************** Admin Faq Routes ***************//
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {

        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });

    //************** Admin Comment Routes ***************//
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {

        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });

    //************** Admin Appointment Routes ***************//
    Route::prefix('/appointment')->name('appointment.')->controller(ServiceController::class)->group(function () {

        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });

});

