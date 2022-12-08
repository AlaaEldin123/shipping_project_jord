<?php

use App\Http\Controllers\Bcakend\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\FeaturesController;
use App\Http\Controllers\Backend\SecurePartController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\FrontPageController;

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
    return view('frontend.index');
})->name('home');

Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});


Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard')->middleware('auth:admin');
});
 


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
 


Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');

Route::get('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');

Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');

Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');

Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');


       
// Services routes
        Route::get('/services/all', [ServicesController::class, 'ViewServoces'])->name('all.services');
        Route::get('/service/create', [ServicesController::class, 'CreateServoces'])->name('create.service');
        Route::post('/service/store', [ServicesController::class, 'Storeservice'])->name('service.store');
        Route::get('/service/delete/{id}', [ServicesController::class, 'ServicesDelete'])->name('service.delete');
        Route::get('/service/edit/{id}', [ServicesController::class, 'ServicesEdit'])->name('service.edit');
        Route::post('/service/update', [ServicesController::class, 'ServicesUpdate'])->name('service.update');
// Features routes
        Route::get('/features/all', [FeaturesController::class, 'Viewfeatures'])->name('all.features');
        Route::get('/features/create', [FeaturesController::class, 'Createfeatures'])->name('create.features');
        Route::post('/features/store', [FeaturesController::class, 'Storefeatures'])->name('features.store');
        Route::get('/features/delete/{id}', [FeaturesController::class, 'featuresDelete'])->name('features.delete');
        Route::get('/features/edit/{id}', [FeaturesController::class, 'featuresEdit'])->name('features.edit');
        Route::post('/features/update', [FeaturesController::class, 'featuresUpdate'])->name('features.update');

// Slider routes
        Route::get('/slider/all', [SliderController::class, 'Viewsliders'])->name('all.slider');
        Route::get('/slider/edit/{id}', [SliderController::class, 'sliderEdit'])->name('slider.edit');
        Route::post('/slider/update', [SliderController::class, 'sliderUpdate'])->name('slider.update');


  // Slider routes
        Route::get('/aboutus/all', [AboutUsController::class, 'Viewaboutus'])->name('all.aboutus');
        Route::get('/aboutus/edit/{id}', [AboutUsController::class, 'AboutUsEdit'])->name('aboutus.edit');
        Route::post('/aboutus/update', [AboutUsController::class, 'AboutUsUpdate'])->name('aboutus.update');

      
          // Slider routes
        Route::get('/secure_part/all', [SecurePartController::class, 'ViewSecurePart'])->name('all.secure_part');
        Route::get('/secure_part/edit/{id}', [SecurePartController::class, 'SecurePartEdit'])->name('secure_part.edit');
        Route::post('/secure_part/update', [SecurePartController::class, 'SecurePartUpdate'])->name('secure_part.update');

        // Slider routes
        Route::get('/blog/all', [BlogController::class, 'ViewBlog'])->name('all.blog');
        Route::get('/blog/edit/{id}', [BlogController::class, 'BlogEdit'])->name('blog.edit');
        Route::post('/blog/update', [BlogController::class, 'BlogUpdate'])->name('blog.update');
        Route::post('/blog/store', [BlogController::class, 'Storeblog'])->name('blog.store');
        Route::get('/blog/delete/{id}', [BlogController::class, 'blogDelete'])->name('blog.delete');
        Route::get('/blog/create', [BlogController::class, 'Createblog'])->name('create.blog');

      
// Admin Site Setting Routes 

Route::get('/setting/site', [SettingController::class, 'SiteSetting'])->name('site.setting');
Route::post('/setting/site/update', [SettingController::class, 'SiteSettingUpdate'])->name('update.sitesetting');



Route::get('/all/services',[FrontPageController::class,'ServicesView'])->name('servicespage');
Route::get('/aboutus',[FrontPageController::class,'aboutusView'])->name('aboutUs');
Route::get('/blog',[FrontPageController::class,'ViewBlog'])->name('blog');
Route::get('/contact',[FrontPageController::class,'ViewContact'])->name('contact');


Route::post('/store/client',[FrontPageController::class,'StoreUser'])->name('user.store');

Route::get('/view/client/subss',[FrontPageController::class,'ViewUserSub'])->name('user.sub');

Route::get('/view/client/subs',[FrontPageController::class,'ViewUserSubfront'])->name('user.sub.front');

