<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Controller;
use Illuminate\Http\request;
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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('admin', function () {
//     return '1';
// })->middleware('test-middleware');

// Route::get('user', function () {
//     return 'Lê Thăng Long';
// })->middleware('test2-middleware');


//Danh sách chuyên mục
// Route::get('/', [Controller::class, 'index']);



Route::middleware('test-middleware')->prefix('/admin')->group(function(){
    route::get('/', [ProductController::class,'index'])->name('main');

    Route::prefix('components')->group(function(){
        route::get('/scrollbar', [ProductController::class,'componentsScrollbar']);
        route::get('/divider', [ProductController::class,'componentsDivider']);
        route::get('/boxicons', [ProductController::class,'componentsboxicon']);

    });
    Route::prefix('form-table')->group(function(){
        route::get('/horizontal', [ProductController::class,'formHorizontal']);
        route::get('/vertical', [ProductController::class,'formVertical']);
        route::get('/inputs', [ProductController::class,'formInputs']);
        route::get('/groups', [ProductController::class,'formGroups']);
        route::get('/tablesBasic', [ProductController::class,'formTablesBasic']);

    });
    Route::prefix('layouts')->group(function(){
        route::get('/blank', [ProductController::class,'layoutsBlank']);
        route::get('/container', [ProductController::class,'layoutsContainer']);
        route::get('/fluid', [ProductController::class,'layoutsFluid']);
        route::get('/menu', [ProductController::class,'layoutsMenu']);
        route::get('/navbar', [ProductController::class,'layoutsnavbar']);

    });
    Route::prefix('login')->group(function(){
        Route::get('/',[LoginController::class,'authlogin']);
        Route::get('/dangki',[LoginController::class,'registerlogin']);
        Route::get('/quenmatkhau',[LoginController::class,'authforgotpassword']);

    });
    Route::prefix('pages')->group(function(){
        route::get('/settings', [ProductController::class,'pagesAccountSettings']);
        route::get('/connections', [ProductController::class,'pagesConnections']);
        route::get('/notifications', [ProductController::class,'pagesNotifications']);
        route::get('/error', [ProductController::class,'pagesError']);
        route::get('/maintenance', [ProductController::class,'pagesMaintenance']);

    });
    Route::prefix('product')->group(function(){
        Route::get('/',[ProductController::class,'productCard']);
    });
    Route::prefix('ui')->group(function(){
    
    });
        
});



Route::prefix('/client')->group(function(){
    Route::get('/',[ClientController::class,'index']);
    Route::get('/login',[ClientController::class,'login']);
    Route::get('/post',[ClientController::class,'blogpost']);
    Route::get('/register',[ClientController::class,'register']);
  

});
