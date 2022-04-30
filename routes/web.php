<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\HOD\HodController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\loginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\DashboardController;
use GuzzleHttp\Middleware;

// Route::get('/', function () {
//     return view('home.dashboard');
// });



Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'Login']); 
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'Registration']); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 


// google login

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('callback/dashboard', [GoogleController::class, 'handleGoogleCallback'])->name('callback.dashboard');

// google login
Route::get('/', [DashboardController::class, 'index'])->middleware('auth'); 
Route::get('dashboard/edit', [DashboardController::class, 'edit'])->name('dashboard.edit')->middleware('auth'); 
Route::post('dashboard/updateD', [DashboardController::class, 'UpDept'])->name('dashboard.updateD')->middleware('auth'); 
Route::post('dashboard/update', [DashboardController::class, 'update'])->name('dashboard.update')->middleware('auth'); 
Route::post('dashboard/sendMessage', [DashboardController::class, 'sendMessage'])->name('dashboard.sendMessage')->middleware('auth'); 
Route::get('dashboard/message', [DashboardController::class, 'sendMessagePage'])->name('message')->middleware('auth'); 
Route::get('dashboard/view-message', [DashboardController::class, 'ViewMessage'])->name('dashboard.view-message')->middleware('auth');
Route::get('dashboard/delete-message/{id}', [DashboardController::class, 'DeleteMessage'])->name('dashboard.delete-message')->middleware('auth');
Route::get('dashboard/poll', [DashboardController::class, 'pollPage'])->name('dashboard.poll')->middleware('auth');
Route::get('dashboard/voting/{id}/{polling}', [DashboardController::class, 'PollingProcess'])->name('dashboard.voting')->middleware('auth');


// Route::view('poll', 'home.poll')->name('poll');



Route::view('status', 'home.status')->name('status'); 
Route::view('poll', 'home.poll')->name('poll');


Route::view('vote', 'home.vote')->name('vote'); 



Route::get('HodApproval', [HodController::class, 'index'])->name('HodApproval')->middleware('auth'); 

Route::get('HodApprove/{id}', [HodController::class, 'approve'])->middleware('auth'); 
Route::get('HodMembers', [HodController::class, 'show'])->name('HodMembers')->middleware('auth');
Route::post('HodWfStatus/{id}', [HodController::class, 'updateWfStatus'])->name('WfStatus')->middleware('auth');



 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// admin
// Route::get('admin/login', [loginController::class, 'index'])->name('admin.login'); 
// Route::get('admin/login', [loginController::class, 'login']); 


Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard'); 

Route::get('admin/all-workers', [AdminController::class, 'allWorkers'])->name('admin.all-workers');
Route::get('admin/unapproved-workers', [AdminController::class, 'unappWorkers'])->name('admin.unapproved-workers');
Route::get('admin/messages', [AdminController::class, 'messages'])->name('AdminMessages');

// Route::view('adminmessages', 'admin/messsages');
// Route::view('adminMessages', 'admin.messages');



Route::post('admin/make-hod/{id}', [AdminController::class, 'hod'])->name('admin.make-hod'); 
Route::get('admin/all-Hod', [AdminController::class, 'viewHod'])->name('admin.all-Hod');
Route::get('admin/assign-Hod', [AdminController::class, 'AssignHod'])->name('admin.assign-Hod');


Route::get('admin/poll', [AdminController::class, 'pollPage'])->name('admin.poll');
Route::post('admin/newpoll', [AdminController::class, 'NewPoll'])->name('newpoll'); 
Route::get('admin/updatepoll/{id}', [AdminController::class, 'UpdatePoll'])->name('updatepoll'); 
Route::any('admin/deletepoll/{id}', [AdminController::class, 'deletePoll'])->name('deletepoll'); 


Route::get('admin/pollResponse/{id}', [AdminController::class, 'PollResult'])->name('PollResponse'); 

// Route::get('admin/poll-response', [AdminController::class, 'PollResult'])->name('Poll-response'); 







// admin