<?php

use App\Http\Middleware\UserAccess;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReplyController;

Route::get('/', function () {
    return view('welcome');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::group(['prefix' => 'home'], function () {
    Route::get('/productl', [ProductController::class, 'showproduct'])->name('home/productl');
});


Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', function () {
        return view('dashboard');
    })->name('admin/home');

    Route::get('admin/profile', function () {
        return view('profile');
    })->name('admin/profile');

    Route::group(['prefix' => 'admin/manages'], function () {
        Route::get('/', [ManageController::class, 'indexM'])->name('admin/manages');
        Route::get('/createM', [ManageController::class, 'createM'])->name('admin/manages/createM');
        Route::post('/storeM', [ManageController::class, 'storeM'])->name('admin/manages/storeM');
        Route::get('/showM/{id}', [ManageController::class, 'showM'])->name('admin/manages/showM');
        Route::get('/editM/{id}', [ManageController::class, 'editM'])->name('admin/manages/editM');
        Route::put('/editM/{id}', [ManageController::class, 'updateM'])->name('admin/manages/updateM');
        Route::delete('/destroyM/{id}', [ManageController::class, 'destroyM'])->name('admin/manages/destroyM');

    });

    Route::group(['prefix' => 'admin/products'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin/products');
        Route::get('/create', [ProductController::class, 'create'])->name('admin/products/create');
        Route::post('/store', [ProductController::class, 'store'])->name('admin/products/store');
        Route::get('/show/{id}', [ProductController::class, 'show'])->name('admin/products/show');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
        Route::put('/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
        Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');

    });

    Route::get('/products', [ProductController::class, 'indexs'])->name('products.indexs');
    Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');



    // Route::get('admin/products', function () {
    //     return view('products.index');
    // })->name('admin/products');
    // Route::get('admin/products/create', function () {
    //     return view('products.create');
    // })->name('admin/products/create');
    // Route::post('admin/products/store', function () {
    //     return view('products.index');
    // })->name('admin/products/store');

    Route::get('/home', function () {
        return view('home');
    })->name('home');


});



//Normal Users Routes List
// Route::middleware('auth', [UserAccess::class, 'user-access:user'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');

// });

//Admin Routes List
// Route::middleware(['auth', 'user-access:admin'])->group(function () {
//     Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
//     Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
// });

Route::middleware('auth')->group(function () {
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    Route::get('/messages/{message}', [MessageController::class, 'show'])->name('messages.show'); // Eksik rota tanımlandı

    Route::get('/admin/messages', [ReplyController::class, 'index'])->name('admin.messages.index');
    Route::get('/admin/messages/{message}', [ReplyController::class, 'show'])->name('admin.messages.show');
    Route::post('/admin/messages/{message}/reply', [ReplyController::class, 'store'])->name('admin.messages.reply');
});
