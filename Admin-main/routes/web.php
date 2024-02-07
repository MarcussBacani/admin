<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\productController;
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
// Route::get('/dashboard',[DashboardController::class, 'dashboard']);

// Route::get('/login',[LoginController::class, 'login']);

// Route::get('/signup',[SignupController::class, 'signup']);

Route::get('/', function(){
    return  view('Dashboards');
});

Route::get('/dashboards', function(){
    return  view('Dashboards');
});

Route::get('/customers', function(){
    return  view('Customers');
});

Route::get('/agegroups', function(){
    return  view('Agegroups');
});

Route::get('/productmanagements', function(){
    return  view('Productmanagement');
});

Route::get('productmanagements',[App\Http\Controllers\productController::class,'index']);
Route::post('store',[App\Http\Controllers\productController::class,'store']);









