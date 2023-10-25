<?php

use App\Models\Employee;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PersonalProfileController;
use App\Http\Controllers\RentalReturnController;
use App\Http\Controllers\RentalApprovalController;
use App\Http\Controllers\RentalDispatchController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\Website\ProductCategoryController;
use App\Http\Controllers\Website\ProductController as WebsiteProductController;

// Route::get('/createSymlink', function(){
//     $targetFolder = storage_path('app/public');
//     $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';
//     symlink($targetFolder, $linkFolder);
// });
Route::get('/createRole', [RolePermissionController::class, 'createRole']);

Route::get('/', function () {
    return view('website.pages.home');
})->name('home');

Route::get('/about', function () {
    return view('website.pages.about');
})->name('about');

Route::get('/products/{id}', [WebsiteProductController::class, 'index'])->name('products');

Route::get('/product/{id}', [WebsiteProductController::class, 'show'])->name('product');

Route::get('/catering', function () {
    return view('website.pages.catering');
})->name('catering');

Route::get('/contact', function () {
    return view('website.pages.contact');
})->name('contact');

Route::get('/event', function () {
    return view('website.pages.event');
})->name('event');

Route::get('/logistics', [ProductCategoryController::class, 'index'])->name('logistics');


Route::get('/workshop', function () {
    return view('website.pages.workshop');
})->name('workshop');


Route::get('/createCategories', [CategoryController::class, 'createCategories']);

//admin routes
Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => 'auth'], function(){

    Route::get('/dashboard', function () {
        return redirect()->route('admin.products');
        // return view('admin.pages.dashboard');
    })->name('dashboard');

    Route::get('/user/profile', [PersonalProfileController::class,'index'])->name('user.profile');
    
    Route::patch('/section/update', [SectionController::class, 'update'])->name('section.update');
    
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::patch('/product/update', [ProductController::class, 'update'])->name('product.update');
    Route::patch('/product/update-section', [ProductController::class, 'updateSection'])->name('product.update-section');
    Route::get('/product/archive/{id}', [ProductController::class, 'archive'])->name('product.archive');
    Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::patch('/product/change-status/{id}', [ProductController::class, 'changeStatus'])->name('product.change-status');
    
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::patch('/category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    
    Route::group(['middleware' => ['role:sales_manager|admin|super_admin']], function(){
        Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
        Route::get('/customer/{customer}', [CustomerController::class, 'show'])->name('customer.show');
        Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');

        Route::get('/invoice/{invoice}', [InvoiceController::class, 'show'])->name('invoice.show');
    });
    
    Route::group(['middleware'=> ['can:collect due']], function(){
        Route::patch('invoice/collect-due', [InvoiceController::class, 'collectDue'])->name('invoice.collect-due');
    });

    Route::group(['middleware' => ['role:admin|super_admin']], function(){
        Route::patch('/customer/update', [CustomerController::class, 'update'])->name('customer.update');
        Route::delete('/customer/delete/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
    });

    Route::group(['middleware' => ['role:sales_manager|super_admin']], function(){
        Route::get('/rentals', [RentalController::class, 'index'])->name('rentals');
        Route::get('/rental/create', [RentalController::class, 'create'])->name('rental.create');
        Route::post('/rental/store', [RentalController::class, 'store'])->name('rental.store');
    });

    Route::group(['middleware' => ['role:admin|super_admin']], function(){
        Route::get('/rentals/approve', [RentalApprovalController::class, 'index'])->name('rentals.approve');
        Route::get('/rentals/approve/{invoice}', [RentalApprovalController::class, 'edit'])->name('rentals.review');
        Route::patch('/rentals/review', [RentalApprovalController::class, 'update'])->name('rentals.review.update');
    });
    
    Route::group(['middleware' => ['role:inventory_manager|super_admin']], function(){
        Route::get('/rentals/dispatch', [RentalDispatchController::class, 'index'])->name('rentals.dispatch');
        Route::get('/rentals/dispatch/{invoice}/orders', [RentalDispatchController::class, 'show'])->name('rentals.dispatch.orders');
        Route::get('rentals/dispatch/{rental}', [RentalDispatchController::class, 'update'])->name('rentals.dispatch.update');

        Route::get('/rentals/returns', [RentalReturnController::class, 'index'])->name('rentals.returns');
        Route::get('/rentals/returns/{invoice}', [RentalReturnController::class, 'show'])->name('rentals.return.products');
        Route::patch('/rentals/return/accept', [RentalApprovalController::class, 'acceptReturn'])->name('rentals.return.accept');
        Route::patch('/rentals/return/repair', [RentalApprovalController::class, 'sendToRepair'])->name('rentals.return.repair');
    });


    //profile routes
    Route::group(['prefix' => '/profile', 'as' => 'profile.'], function(){
        Route::get('/overview', [ProfileController::class, 'index'])->name('overview');

        // need the permission to update company profile
        Route::group(['middleware' => ['can:update company profile']], function(){
            Route::get('/settings', [ProfileController::class, 'edit'])->name('settings');
            Route::patch('/update', [ProfileController::class, 'update'])->name('update');
            Route::patch('/update-email', [ProfileController::class, 'updateEmail'])->name('update-email');
            Route::patch('/update-password', [ProfileController::class, 'updatePassword'])->name('update-password');
            Route::patch('/update-general', [ProfileController::class, 'updateGeneral'])->name('update-general');
        });
        Route::group(['middleware' => ['role:super_admin|admin|sales_manager']], function(){
            Route::get('/advance', [ProfileController::class, 'advance'])->name('advance');
            Route::patch('/advance/update', [ProfileController::class, 'updateAdvance'])->name('advance.update');
        });
    });

    Route::get('/clear-cache', [CacheController::class, 'clearCache']);
    // Route::get('/pages', [PageController::class, 'index'])->name('pages');
    // Route::post('/page/update', [PageController::class, 'update'])->name('page.update');
    // Route::patch('/page/change-status/{id}', [PageController::class, 'changeStatus'])->name('page.change-status');
    // Route::get('/page/section/change-status/{id}', [PageController::class, 'changeSectionStatus'])->name('page.section.change-status');

    // Route::get('/banners', [BannerController::class, 'index'])->name('banners');
    // Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
    // Route::patch('/banner/update', [BannerController::class, 'update'])->name('banner.update');
    // Route::delete('/banner/delete/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');
    // Route::patch('/banner/change-status/{id}', [BannerController::class, 'changeStatus'])->name('banner.change-status');
    
    // Route::get('/services', [ServiceController::class, 'index'])->name('services');
    // Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
    // Route::patch('/service/update', [ServiceController::class, 'update'])->name('service.update');
    // Route::patch('/service/update-section', [ServiceController::class, 'updateSection'])->name('service.update-section');
    // Route::delete('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
    // Route::patch('/service/change-status/{id}', [ServiceController::class, 'changeStatus'])->name('service.change-status');
    // Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('feedbacks');
    // Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
    // Route::patch('/feedback/update', [FeedbackController::class, 'update'])->name('feedback.update');
    // Route::patch('/feedback/update-section', [FeedbackController::class, 'updateSection'])->name('feedback.update-section');
    // Route::delete('/feedback/delete/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
    // Route::patch('/feedback/change-status/{id}', [FeedbackController::class, 'changeStatus'])->name('feedback.change-status');
    
    // Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
    // Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
    // Route::patch('/employee/update', [EmployeeController::class, 'update'])->name('employee.update');
    // Route::patch('/employee/update-section', [EmployeeController::class, 'updateSection'])->name('employee.update-section');
    // Route::delete('/employee/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
    // Route::patch('/employee/change-status/{id}', [EmployeeController::class, 'changeStatus'])->name('employee.change-status');
    
    // Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');
    // Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
    // Route::patch('/faq/update', [FaqController::class, 'update'])->name('faq.update');
    // Route::patch('/faq/update-section', [FaqController::class, 'updateSection'])->name('faq.update-section');
    // Route::delete('/faq/delete/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');
    // Route::patch('/faq/change-status/{id}', [FaqController::class, 'changeStatus'])->name('faq.change-status');
    
    // Route::get('/company-histories', [CompanyHistoryController::class, 'index'])->name('company-histories');
    // Route::post('/company-history/store', [CompanyHistoryController::class, 'store'])->name('company-history.store');
    // Route::patch('/company-history/update', [CompanyHistoryController::class, 'update'])->name('company-history.update');
    // Route::patch('/company-history/update-section', [CompanyHistoryController::class, 'updateSection'])->name('company-history.update-section');
    // Route::delete('/company-history/delete/{id}', [CompanyHistoryController::class, 'destroy'])->name('company-history.destroy');
    // Route::patch('/company-history/change-status/{id}', [CompanyHistoryController::class, 'changeStatus'])->name('company-history.change-status');
    
    
    // //Messages Routes
    // Route::group(['prefix' => '/inbox', 'as' => 'inbox.'], function(){
    //     Route::get('/messages/{type?}', [ClientMessageController::class, 'index'])->name('messages');
    //     Route::get('/message/reply/{id}', [ClientMessageController::class, 'show'])->name('message.reply');
    //     Route::get('/message/important/{id}', [ClientMessageController::class, 'toggleImportant'])->name('message.important');
    // });

});

// require __DIR__.'/statics.php';
require __DIR__.'/admin_auth.php';
require __DIR__.'/customer_auth.php';
