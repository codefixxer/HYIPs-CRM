<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WithdrawalController;
use App\Http\Controllers\Chatbot\UserNameController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserPackageController;



// Frontend routes
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index'); // Home
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about'); // About
Route::get('/blog', [FrontendController::class, 'blog'])->name('frontend.blog'); // Blog
Route::get('/careers', [FrontendController::class, 'careers'])->name('frontend.careers'); // Careers
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact'); // Contact

// Market routes
Route::get('/market', [FrontendController::class, 'market'])->name('frontend.market'); // Markets

// Resources section
Route::get('/help-center', [FrontendController::class, 'helpCenter'])->name('frontend.help-center'); // Help Center
Route::get('/customers', [FrontendController::class, 'customers'])->name('frontend.customers'); // Customers
Route::get('/roadmap', [FrontendController::class, 'roadmap'])->name('frontend.roadmap'); // Roadmap
Route::get('/legal-docs', [FrontendController::class, 'legalDocs'])->name('frontend.legal-docs'); // Legal Docs

// Education section
Route::get('/education', [FrontendController::class, 'education'])->name('frontend.education'); // Education



Route::get('/login', [AuthController::class, 'loginform'])->name('login');
Route::get('/register', [AuthController::class, 'registerform'])->name('registerform');
Route::post('register', [AuthController::class, 'register'])->name('register');;
Route::post('/login/post', [AuthController::class, 'login'])->name('login.post');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('login/google', [SocialController::class, 'redirectToGoogle'])->name('google.login');
Route::get('login/google/callback', [SocialController::class, 'handleGoogleCallback']);

Route::get('login/facebook', [SocialController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('login/facebook/callback', [SocialController::class, 'handleFacebookCallback']);


Route::get('/error', [AuthController::class, 'error403'])->name('auth.errors.error403');










Route::get('admin/get-package-details/{id}', [TransactionController::class, 'getPackageDetails']);









Route::middleware(['auth'])->group(function () {


    Route::prefix('admin')->middleware(['role:admin'])->name('admin.')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/users', [UsersController::class, 'index'])->name('user.index');


            Route::resource('packages', PackageController::class);


            Route::resource('user_packages', UserPackageController::class);


            Route::resource('transactions', TransactionController::class);
            Route::post('transactions/accept/{id}', [TransactionController::class, 'acceptTransaction'])->name('transactions.accept');


            Route::resource('withdrawals', WithdrawalController::class);
            Route::post('withdrawals/{id}/approve', [WithdrawalController::class, 'approve'])->name('withdrawals.approve');

            Route::resource('bank', BankController::class);
            Route::get('/bank/{id}/status', [BankController::class, 'changeStatus'])->name('bank.status'); // Change status route


        });








    Route::prefix('user')->middleware(['role:user'])->name('user.')->group(function () {


        Route::get('/wallet', [DashboardController::class, 'wallet'])->name('wallet');
        Route::get('/dashboard', [DashboardController::class, 'userDashboard'])->name('dashboard');
        Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('delete');







            Route::resource('transactions', TransactionController::class);
            Route::post('/accept/{id}', [TransactionController::class, 'acceptTransaction'])->name('transactions.accept');


            Route::resource('withdrawals', WithdrawalController::class);
            Route::post('/{id}/approve', [WithdrawalController::class, 'approve'])->name('withdrawals.approve');
            Route::get('/history', [WithdrawalController::class, 'history'])->name('withdrawals.history');






    });
});
