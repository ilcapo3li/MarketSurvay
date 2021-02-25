<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingDetailsController;
use App\Http\Controllers\MarketDataController;
use App\Http\Controllers\SupscriptionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

Route::get('/',[LandingDetailsController::class, 'home']);
Route::post('/agent/engagement',[MarketDataController::class, 'store']);
Route::post('/supscription',[SupscriptionController::class, 'store']);
Route::get('/market',[MarketDataController::class, 'index']);




// Route::get('/bicomatics/admin',function(){
//     return view('admin.dashboard');
// });

Route::get('/bicomatics/admin',function(){
   return view('admin.dashboard');
 //  echo url()->current();
})->name('admin.dashboard')->middleware('authe');
Route::post('/bicomatics/admin/login',[LoginController::class, 'login'])->name ('admin.login');

// Route::get('/bicomatics/admin/login',function(){
//     return view('admin.login');
// });
Route::get('/bicomatics/admin/login',[LoginController::class, 'getLogin'])->name ('login')->middleware('loged');

Route::get('/logout',[LogoutController::class, 'getLogout']);

// Route::group(['prefix'=>'bicomatics','middleware'=>'auth'],function(){


// Route::get('/admin',function(){
//     return view('admin.dashboard');
// });


// Route::post('/bicomatics/admin/login',[LoginController::class, 'login'])->name ('admin.login');

// });