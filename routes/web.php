<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', [PagesController::class,'frontpage'])->name('frontpage');

Route::get('/admin/login', [AdminAuthController::class,'getLogin'])->name('login-admin');
Route::post('/admin/login', [AdminAuthController::class,'postLogin'])->name('login.admin.submit');
Route::get('/admin/logout', [AdminAuthController::class,'postLogout'])->name('logout.admin');

// Admin
Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/admin', [AdminController::class,'profile'])->name('dashboard.admin');
    Route::get('/admin/profile', [AdminController::class,'profile'])->name('profile.admin');
    Route::get('/admin/change-password', [AdminController::class,'changePassword'])->name('admin.change-password');
    Route::post('/admin/change-password', [AdminController::class,'savePassword']);
    Route::get('/admin/users', [AdminController::class,'userIndex'])->name('user.index');
    Route::get('/admin/user/{id}/edit', [AdminController::class,'userEdit']);
    Route::post('/admin/user', [AdminController::class,'userUpdate'])->name('user.update');
    Route::get('/admin/user/{id}/delete', [AdminController::class,'userDelete'])->name('user.delete');
    Route::get('/admin/news', [AdminController::class,'newsIndex'])->name('news.index');
    Route::get('/admin/news/add', [AdminController::class,'newsAdd'])->name('news.add');
    Route::post('/admin/news/add', [AdminController::class,'newsStore'])->name('news.store');
    Route::get('/admin/news/{id}/edit', [AdminController::class,'newsEdit'])->name('news.edit');
    Route::post('/admin/news/{id}/edit', [AdminController::class,'newsUpdate'])->name('news.update');
    Route::get('/admin/news/{id}/delete', [AdminController::class,'newsDelete'])->name('news.delete');
    Route::get('/admin/services', [AdminController::class,'servicesIndex'])->name('services.index');
    Route::get('/admin/services/add', [AdminController::class,'servicesAdd'])->name('services.add');
    Route::post('/admin/services/add', [AdminController::class,'servicesStore'])->name('services.store');
    Route::get('/admin/services/{id}/edit', [AdminController::class,'servicesEdit'])->name('services.edit');
    Route::post('/admin/services/{id}/edit', [AdminController::class,'servicesUpdate'])->name('services.update');
    Route::get('/admin/services/{id}/delete', [AdminController::class,'servicesDelete'])->name('services.delete');
    Route::get('/admin/faqs', [AdminController::class,'faqIndex'])->name('faq.index');
    Route::get('/admin/faq/add', [AdminController::class,'faqAdd'])->name('faq.add');
    Route::post('/admin/faq/add', [AdminController::class,'faqStore'])->name('faq.store');
    Route::get('/admin/faq/{id}/edit', [AdminController::class,'faqEdit'])->name('faq.edit');
    Route::post('/admin/faq/{id}/edit', [AdminController::class,'faqUpdate'])->name('faq.update');
    Route::get('/admin/faq/{id}/delete', [AdminController::class,'faqDelete'])->name('faq.delete');
    Route::get('/admin/testimonials', [AdminController::class,'testimonialsIndex'])->name('testimonial.index');
    Route::get('/admin/testimonial/add', [AdminController::class,'testimonialsAdd'])->name('testimonial.add');
    Route::post('/admin/testimonial/add', [AdminController::class,'testimonialsStore'])->name('testimonial.store');
    Route::get('/admin/testimonial/{id}/edit', [AdminController::class,'testimonialsEdit'])->name('testimonial.edit');
    Route::post('/admin/testimonial/{id}/edit', [AdminController::class,'testimonialsUpdate'])->name('testimonial.update');
    Route::get('/admin/testimonial/{id}/delete', [AdminController::class,'testimonialsDelete'])->name('testimonial.delete');
    Route::get('/admin/team', [AdminController::class,'teamIndex'])->name('team.index');
    Route::get('/admin/team/add', [AdminController::class,'teamAdd'])->name('team.add');
    Route::post('/admin/team/add', [AdminController::class,'teamStore'])->name('team.store');
    Route::get('/admin/team/{id}/edit', [AdminController::class,'teamEdit'])->name('team.edit');
    Route::post('/admin/team/{id}/edit', [AdminController::class,'teamUpdate'])->name('team.update');
    Route::get('/admin/team/{id}/delete', [AdminController::class,'teamDelete'])->name('team.delete');
    Route::get('/admin/price', [AdminController::class,'priceIndex'])->name('price.index');
    Route::get('/admin/price/add', [AdminController::class,'priceAdd'])->name('price.add');
    Route::post('/admin/price/add', [AdminController::class,'priceStore'])->name('price.store');
    Route::get('/admin/price/{id}/edit', [AdminController::class,'priceEdit'])->name('price.edit');
    Route::post('/admin/price/{id}/edit', [AdminController::class,'priceUpdate'])->name('price.update');
    Route::get('/admin/price/{id}/delete', [AdminController::class,'priceDelete'])->name('price.delete');
    Route::get('/admin/pages', [AdminController::class,'pagesIndex'])->name('page.index');
    Route::get('/admin/page/add', [AdminController::class,'pagesAdd'])->name('page.add');
    Route::post('/admin/page/add', [AdminController::class,'pagesStore'])->name('page.store');
    Route::get('/admin/page/{id}/edit', [AdminController::class,'pagesEdit'])->name('page.edit');
    Route::post('/admin/page/{id}/edit', [AdminController::class,'pagesUpdate'])->name('page.update');
    Route::get('/admin/page/{id}/delete', [AdminController::class,'pagesDelete'])->name('page.delete');
    Route::get('/admin/partners', [AdminController::class,'partnersIndex'])->name('partner.index');
    Route::get('/admin/partner/add', [AdminController::class,'partnersAdd'])->name('partner.add');
    Route::post('/admin/partner/add', [AdminController::class,'partnersStore'])->name('partner.store');
    Route::get('/admin/partner/{id}/edit', [AdminController::class,'partnersEdit'])->name('partner.edit');
    Route::post('/admin/partner/{id}/edit', [AdminController::class,'partnersUpdate'])->name('partner.update');
    Route::get('/admin/partner/{id}/delete', [AdminController::class,'partnersDelete'])->name('partner.delete');

    Route::get('/admin/options', [AdminController::class,'optionsIndex'])->name('options.index');
    Route::get('/admin/options/{id}/edit', [AdminController::class,'optionsEdit'])->name('options.edit');
    Route::post('/admin/options/{id}/edit', [AdminController::class,'optionsUpdate'])->name('options.update');
});

// User
Route::group(['middleware' => ['auth:user']], function () {
    Route::get('/home', [UserController::class,'index'])->name('user.dashboard');
});

Route::get('/login', [UserLoginController::class,'showLoginForm'])->name('login');
Route::post('/login', [UserLoginController::class,'login'])->name('user.login.submit');
Route::get('/logout', [UserLoginController::class,'logout'])->name('logout');
Route::get('/register', [UserRegisterController::class,'showRegisterForm'])->name('user.register');
Route::post('/register', [UserRegisterController::class,'register'])->name('user.register.submit');
Route::get('/news', [NewsController::class,'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class,'details']);
Route::get('/services', [ServicesController::class,'index'])->name('services');
Route::get('/price', [PricesController::class,'index'])->name('price');
Route::get('/faq', [FaqsController::class,'index'])->name('faq');
Route::get('about', [PagesController::class,'about'])->name('about');
Route::get('contact', [PagesController::class,'contact'])->name('contact');
Route::post('contact', [PagesController::class,'submitContact'])->name('submit.contact');
Route::get('{slug}', [PagesController::class,'details']);