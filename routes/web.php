<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maincontroller;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[Maincontroller::class,'index'])->name('dashboard');
Route::get('/mobilebanking',[Maincontroller::class,'mobilebanking'])->name('mobilebanking');
Route::post('/mobileadd',[Maincontroller::class,'mobileadd'])->name('mobileadd');
Route::get('/telecom',[Maincontroller::class,'telecom'])->name('telecom');
Route::post('/telecomadd',[Maincontroller::class,'telecomadd'])->name('telecomadd');
Route::get('/customer',[Maincontroller::class,'customer'])->name('customer');
Route::post('/addcustomer',[Maincontroller::class,'addcustomer'])->name('addcustomer');
Route::get('/due',[Maincontroller::class,'due'])->name('due');
Route::post('/dueadd',[Maincontroller::class,'dueadd'])->name('dueadd');
Route::get('/expense',[Maincontroller::class,'expense'])->name('expense');
Route::post('/addexpense',[Maincontroller::class,'addexpense'])->name('addexpense');
Route::get('/cash',[Maincontroller::class,'cash'])->name('cash');
Route::post('/cashadd',[Maincontroller::class,'cashadd'])->name('cashadd');
Route::get('/card',[Maincontroller::class,'card'])->name('card');
Route::post('/addcard',[Maincontroller::class,'addcard'])->name('addcard');
Route::get('/loginpage',[Maincontroller::class,'loginpage'])->name('loginpage');
Route::post('/login',[Maincontroller::class,'login'])->name('login');
Route::get('/logout',[Maincontroller::class,'logout'])->name('logout');

