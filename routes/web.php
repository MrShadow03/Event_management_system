<?php

use App\Models\Employee;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\WorkforceController;
use App\Http\Controllers\ClientMessageController;
use App\Http\Controllers\CompanyDetailController;
use App\Http\Controllers\CompanyHistoryController;
use App\Http\Controllers\Website\MessageController;

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

Route::get('/', function () {
    return view('website.pages.home');
})->name('home');

Route::get('/about', function () {
    return view('website.pages.about');
})->name('about');

Route::get('/services', function () {
    return view('website.pages.services');
})->name('services');

Route::get('/service', function () {
    return view('website.pages.service_single');
})->name('service');

Route::get('/projects', function () {
    return view('website.pages.projects');
})->name('projects');

Route::get('/project', function () {
    return view('website.pages.project_single');
})->name('project');

Route::group(['prefix' => '/contact'], function(){
    Route::get('/', [MessageController::class, 'index'])->name('contact');
    Route::post('/store', [MessageController::class, 'store'])->name('contact.store');
});

Route::get('/quote', function () {
    return view('website.pages.quote');
})->name('quote');



//admin routes
Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => 'auth'], function(){

    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard');
    })->name('dashboard');

    Route::get('/pages', [PageController::class, 'index'])->name('pages');
    Route::post('/page/update', [PageController::class, 'update'])->name('page.update');
    Route::patch('/page/change-status/{id}', [PageController::class, 'changeStatus'])->name('page.change-status');
    Route::get('/page/section/change-status/{id}', [PageController::class, 'changeSectionStatus'])->name('page.section.change-status');
    
    Route::patch('/section/update', [SectionController::class, 'update'])->name('section.update');

    Route::get('/banners', [BannerController::class, 'index'])->name('banners');
    Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::patch('/banner/update', [BannerController::class, 'update'])->name('banner.update');
    Route::delete('/banner/delete/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');
    Route::patch('/banner/change-status/{id}', [BannerController::class, 'changeStatus'])->name('banner.change-status');
    
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::patch('/service/update', [ServiceController::class, 'update'])->name('service.update');
    Route::patch('/service/update-section', [ServiceController::class, 'updateSection'])->name('service.update-section');
    Route::delete('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
    Route::patch('/service/change-status/{id}', [ServiceController::class, 'changeStatus'])->name('service.change-status');
    
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
    Route::patch('/project/update', [ProjectController::class, 'update'])->name('project.update');
    Route::patch('/project/update-section', [ProjectController::class, 'updateSection'])->name('project.update-section');
    Route::delete('/project/delete/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    Route::patch('/project/change-status/{id}', [ProjectController::class, 'changeStatus'])->name('project.change-status');
    
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::patch('/category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    
    Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('feedbacks');
    Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::patch('/feedback/update', [FeedbackController::class, 'update'])->name('feedback.update');
    Route::patch('/feedback/update-section', [FeedbackController::class, 'updateSection'])->name('feedback.update-section');
    Route::delete('/feedback/delete/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
    Route::patch('/feedback/change-status/{id}', [FeedbackController::class, 'changeStatus'])->name('feedback.change-status');
    
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
    Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::patch('/employee/update', [EmployeeController::class, 'update'])->name('employee.update');
    Route::patch('/employee/update-section', [EmployeeController::class, 'updateSection'])->name('employee.update-section');
    Route::delete('/employee/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
    Route::patch('/employee/change-status/{id}', [EmployeeController::class, 'changeStatus'])->name('employee.change-status');
    
    Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');
    Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
    Route::patch('/faq/update', [FaqController::class, 'update'])->name('faq.update');
    Route::patch('/faq/update-section', [FaqController::class, 'updateSection'])->name('faq.update-section');
    Route::delete('/faq/delete/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');
    Route::patch('/faq/change-status/{id}', [FaqController::class, 'changeStatus'])->name('faq.change-status');
    
    Route::get('/company-histories', [CompanyHistoryController::class, 'index'])->name('company-histories');
    Route::post('/company-history/store', [CompanyHistoryController::class, 'store'])->name('company-history.store');
    Route::patch('/company-history/update', [CompanyHistoryController::class, 'update'])->name('company-history.update');
    Route::patch('/company-history/update-section', [CompanyHistoryController::class, 'updateSection'])->name('company-history.update-section');
    Route::delete('/company-history/delete/{id}', [CompanyHistoryController::class, 'destroy'])->name('company-history.destroy');
    Route::patch('/company-history/change-status/{id}', [CompanyHistoryController::class, 'changeStatus'])->name('company-history.change-status');
    
    //profile routes
    Route::group(['prefix' => '/profile', 'as' => 'profile.'], function(){
        Route::get('/overview', [ProfileController::class, 'index'])->name('overview');
        Route::get('/settings', [ProfileController::class, 'edit'])->name('settings');
        Route::patch('/update', [ProfileController::class, 'update'])->name('update');
        Route::patch('/update-email', [ProfileController::class, 'updateEmail'])->name('update-email');
        Route::patch('/update-password', [ProfileController::class, 'updatePassword'])->name('update-password');
    });
    
    //Messages Routes
    Route::group(['prefix' => '/inbox', 'as' => 'inbox.'], function(){
        Route::get('/messages/{type?}', [ClientMessageController::class, 'index'])->name('messages');
        Route::get('/message/reply/{id}', [ClientMessageController::class, 'show'])->name('message.reply');
        Route::get('/message/important/{id}', [ClientMessageController::class, 'toggleImportant'])->name('message.important');
    });

    Route::get('/workforces', [WorkforceController::class, 'index'])->name('workforces');
    Route::get('/workforce/{id}', [WorkforceController::class, 'show'])->name('workforce.user');
});

Route::get('/create-detail', [CompanyDetailController::class, 'store']);

ROute::get('/create-section', [SectionController::class, 'store']);

// require __DIR__.'/statics.php';
require __DIR__.'/auth.php';
