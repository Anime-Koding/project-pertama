<?php

// pengguna
use App\Http\Controllers\User\AppointmentController;
use App\Http\Controllers\User\AwardController;
use App\Http\Controllers\User\BlogCategoryController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\ClientController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\EducationController;
use App\Http\Controllers\User\ExperienceController;
use App\Http\Controllers\User\FeatureGroupController;
use App\Http\Controllers\User\InterestController;
use App\Http\Controllers\User\LanguageController;
use App\Http\Controllers\Admin\LayoutController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\User\PortfolioCategoryController;
use App\Http\Controllers\User\PortfolioController;
use App\Http\Controllers\User\ReferenceController;
use App\Http\Controllers\User\ServiceController;
use App\Http\Controllers\User\SkillController;
use App\Http\Controllers\User\TestimonialController;
use App\Http\Controllers\User\VisitorController;

// public
use App\Http\Controllers\ProfileController;
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
// ladning page
Route::get('/', function () {
    return view('welcome');
});

Route::get("profile/{user:username}", [ProfileController::class, 'index'])->name("profile");
// Route::get("terms",[GuestController::class,'terms'])->name("terms");
// Route::get("privacy",[GuestController::class,'privacy'])->name("privacy");
// Route::get("help",[GuestController::class,'help'])->name("help");

Route::get("/company" , function() {
    return view('company.index', [
        "header" => "Company"
    ]);
});

// admin
Route::middleware(['auth:sanctum', 'verified'])->prefix("/admin")->group(function () {
    Route::resource("layout", LayoutController::class)->except("show");

    Route::controller(SettingController::class)->name("setting.")->group(function () {
        Route::get("settings", 'index')->name("index");
        Route::put("settings", 'update')->name("update");
    });
});

// pengguna
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');
    Route::post('/update_public', [DashboardController::class, "update_public"])->name('update_public');

    Route::resource("experience", ExperienceController::class)->except("show");
    Route::resource("education", EducationController::class)->except("show");

    Route::resource("skill", SkillController::class)->except("show");

    Route::controller(SkillController::class)->prefix("subskill")->name("skill.")->group(function () {
        Route::post("storeSubskill", 'storesubSkill')->name("storeSubskill");
        Route::get("{skill}/edit", 'editsubSkill')->name("editsubSkill");
        Route::delete("{skill}", 'destroysubSkill')->name("destroysubSkill");
        Route::put("{skill}", 'updateSubskill')->name("updateSubskill");
    });

    Route::resource("service", ServiceController::class)->except("show");
    Route::resource("portfolio", PortfolioController::class)->except("show");
    Route::resource("pcategory", PortfolioCategoryController::class)->except("show");
    Route::resource("interest", InterestController::class)->except("show");
    Route::resource("award", AwardController::class)->except("show");
    Route::resource("language", LanguageController::class)->except("show");
    Route::resource("bcategory", BlogCategoryController::class)->except("show");
    Route::resource("blog", BlogController::class)->except("show");
    Route::resource("client", ClientController::class)->except("show");
    Route::resource("testimonial", TestimonialController::class)->except("show");
    Route::resource("reference", ReferenceController::class)->except("show");

    Route::post("group_change_status", [FeatureGroupController::class, 'changestatus'])->name("group.change_status");
    Route::resource("group", FeatureGroupController::class)->except("show");

    Route::get("setlayout", [LayoutController::class, 'setLayout'])->name("setlayout");
    Route::post("setlayout", [LayoutController::class, 'storelayout'])->name("storelayout");

    Route::resource("visitor", VisitorController::class)->except("show");
    Route::resource("contact", ContactController::class)->except(["show", "create", "edit", "update"]);
    Route::resource("appointment", AppointmentController::class)->except(["show", "create", "edit", "update"]);
});

// viistor
Route::post("visitor/{user:username}", [ProfileController::class, 'visitor'])->name("visitor_store");
Route::post("contact/{user:username}", [ProfileController::class, 'contact'])->name("contact_store");
Route::post("appointment/{user:username}", [ProfileController::class, 'appointment'])->name("appointment_store");
