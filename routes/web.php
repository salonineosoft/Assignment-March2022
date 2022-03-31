<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HOD\HodStaffController;
use App\Http\Controllers\Staff\StaffLeaveController;
use App\Http\Controllers\HOD\LeaveManagementHodController;
use App\Http\Controllers\LoginController;
/*
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
 //Route::middleware([user::class])->group(function(){
// HOD Controllers
Route::resource('ShowStaffs', HodStaffController::class)->except('create','store','edit','update');
Route::resource('ShowStaffLeaves',LeaveManagementHodController::class)->except('store','show','destroy');
Route::get('/HodDashboard',[dashboardController::class,'HodDashboard']);
// Staff Controllers
Route::resource('ShowLeaves', StaffLeaveController::class)->except('edit','update','destroy');
Route::get('/dashboard',[dashboardController::class,'index']);
Route::get('/dashboardStaffMain',[dashboardController::class,'dashboardStaff']);
Route::get('/Logout',[dashboardController::class,'logout']);
Route::get('/first',[dashboardController::class,'first']);
//});
Route::resource('registers', RegisterController::class)->except('edit','update','show','destroy');
Route::resource('logins', LoginController::class)->except('create','edit','update','show','destroy');