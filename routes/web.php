<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingDetailsController;
use App\Http\Controllers\MarketDataController;
use App\Http\Controllers\SupscriptionController;


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




Route::get('/bicomatics/admin',function(){
    return view('admin.main');
});