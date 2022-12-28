<?php

use App\Http\Controllers\backend\{
    AuthController,
    CareerController,
    CategoryController,
    DashboardController,
    MessageController,
    PortfolioController,
    ReviewController,
    ServiceController,
    TeamController
};
use App\Http\Controllers\frontend\MainController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('backend.services.view');
// });

// frontend Routes start
Route::get('/', [MainController::class,'index'])->name('UI_index');
Route::get('/about-us', [MainController::class,'about_us'])->name('UI_aboutUs');
Route::get('/careers', [MainController::class,'career'])->name('UI_career');
Route::get('/career-details/{slug?}', [MainController::class,'career_detail'])->name('UI_career_detail');
Route::post('/career-jobs', [MainController::class,'job'])->name('UI_career_job');
Route::get('/contact-us', [MainController::class,'contact_us'])->name('UI_contactUs');
Route::get('/portfolios', [MainController::class,'portfolio'])->name('UI_portfolio');
Route::get('/detail-portfolios/{slug?}', [MainController::class,'portfolio_detail'])->name('UI_portfolio_detail');
Route::get('/services', [MainController::class,'service'])->name('UI_service');
Route::get('/detail-services/{slug?}', [MainController::class,'detail_service'])->name('UI_detail_service');
Route::post('/messages', [MainController::class,'message'])->name('UI_message');
Route::post('/subscriptions', [MainController::class,'subscription'])->name('UI_subscription');
// frontend Routes end

// backend Routes start
Route::get('/logins', [AuthController::class,'login_form'])->name('admin_login_form');
Route::post('/logins.process', [AuthController::class,'login_process'])->name('admin_login_process');
Route::get('/logouts', [AuthController::class,'logout_form'])->name('admin_logout');

Route::group(['middleware'=>['adminAuth']],function(){

Route::get('/dashboards', [DashboardController::class,'index'])->name('admin_index');

// services route start
Route::get('/services-views', [ServiceController::class,'view'])->name('admin_service');
Route::get('/services-adds', [ServiceController::class,'add'])->name('admin_service_add');
Route::post('/services-saves', [ServiceController::class,'save'])->name('admin_service_save');
Route::get('/services-edits/{id?}', [ServiceController::class,'edit'])->name('admin_service_edit');
Route::post('/services-updates/{id?}', [ServiceController::class,'update'])->name('admin_service_update');
Route::get('/services-deletes/{id?}', [ServiceController::class,'delete'])->name('admin_service_delete');
// services route end

// portfolio route start
Route::get('/portfolio-views', [PortfolioController::class,'view'])->name('admin_portfolio');
Route::get('/portfolio-adds', [PortfolioController::class,'add'])->name('admin_portfolio_add');
Route::post('/portfolio-saves', [PortfolioController::class,'save'])->name('admin_portfolio_save');
Route::get('/portfolio-edits/{id?}', [PortfolioController::class,'edit'])->name('admin_portfolio_edit');
Route::post('/portfolio-updates/{id?}', [PortfolioController::class,'update'])->name('admin_portfolio_update');
Route::get('/portfolio-deletes/{id?}', [PortfolioController::class,'delete'])->name('admin_portfolio_delete');
// portfolio route end

// categorys route start
Route::get('/category-views', [CategoryController::class,'view'])->name('admin_category');
Route::get('/category-adds', [CategoryController::class,'add'])->name('admin_category_add');
Route::post('/category-saves', [CategoryController::class,'save'])->name('admin_category_save');
Route::get('/category-edits/{id?}', [CategoryController::class,'edit'])->name('admin_category_edit');
Route::post('/category-updates/{id?}', [CategoryController::class,'update'])->name('admin_category_update');
Route::get('/category-deletes/{id?}', [CategoryController::class,'delete'])->name('admin_category_delete');
// categorys route end

// team route start
Route::get('/team-views', [TeamController::class,'view'])->name('admin_team');
Route::get('/team-adds', [TeamController::class,'add'])->name('admin_team_add');
Route::post('/team-saves', [TeamController::class,'save'])->name('admin_team_save');
Route::get('/team-edits/{id?}', [TeamController::class,'edit'])->name('admin_team_edit');
Route::post('/team-updates/{id?}', [TeamController::class,'update'])->name('admin_team_update');
Route::get('/team-deletes/{id?}', [TeamController::class,'delete'])->name('admin_team_delete');
// team route end

// review route start
Route::get('/review-views', [ReviewController::class,'view'])->name('admin_review');
Route::get('/review-adds', [ReviewController::class,'add'])->name('admin_review_add');
Route::post('/review-saves', [ReviewController::class,'save'])->name('admin_review_save');
Route::get('/review-edits/{id?}', [ReviewController::class,'edit'])->name('admin_review_edit');
Route::post('/review-updates/{id?}', [ReviewController::class,'update'])->name('admin_review_update');
Route::get('/review-deletes/{id?}', [ReviewController::class,'delete'])->name('admin_review_delete');
// review route end

// career route start
Route::get('/career-views', [CareerController::class,'view'])->name('admin_career');
Route::get('/job-views', [CareerController::class,'job'])->name('admin_job');
Route::get('/job-details/{id?}', [CareerController::class,'job_detail'])->name('admin_job_detail');
Route::get('/career-adds', [CareerController::class,'add'])->name('admin_career_add');
Route::post('/career-saves', [CareerController::class,'save'])->name('admin_career_save');
Route::get('/career-edits/{id?}', [CareerController::class,'edit'])->name('admin_career_edit');
Route::post('/career-updates/{id?}', [CareerController::class,'update'])->name('admin_career_update');
Route::get('/career-deletes/{id?}', [CareerController::class,'delete'])->name('admin_career_delete');
// career route end

// message route start
Route::get('/message-views', [MessageController::class,'message'])->name('admin_message');
Route::get('/subscription-views', [MessageController::class,'subscription'])->name('admin_subscription');
Route::get('/quote-views', [MessageController::class,'quote'])->name('admin_quote');
// message route end

});
// backend Routes end
