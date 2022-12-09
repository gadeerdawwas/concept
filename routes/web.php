<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SupplierController;
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

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/',[SiteController::class,'index'])->name('home');
Route::get('/about',[SiteController::class,'about'])->name('about');
Route::get('/Profile',[SiteController::class,'Profile'])->name('Profile');
Route::get('/contact_us',[SiteController::class,'contact_us'])->name('contact_us');
Route::post('/contact',[SiteController::class,'contact'])->name('contact');
Route::get('/profile-qr',[SiteController::class,'profile_qr'])->name('profile_qr');
Route::get('/services/{name}',[SiteController::class,'services'])->name('services');

Route::get('/send_mail',[SiteController::class,'send_mail'])->name('send_mail');

// Route::get('/programming',[SiteController::class,'programming'])->name('programming');
// Route::get('/Networking',[SiteController::class,'Networking'])->name('Networking');
// Route::get('/Data_Recovery',[SiteController::class,'Data_Recovery'])->name('Data_Recovery');
// Route::get('/Maintenance',[SiteController::class,'Maintenance'])->name('Maintenance');
// Route::get('/Original_license',[SiteController::class,'Original_license'])->name('Original_license');
// Route::get('/Website_Creation',[SiteController::class,'Website_Creation'])->name('Website_Creation');

Auth::routes();
// Auth::routes(['register' => false]);


Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => ['auth']], function () {
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::get('project_image_delete/{id}',[ServicesController::class,'project_image_delete'])->name('project_image_delete');
    Route::resource('services',ServicesController::class);
    Route::resource('contacts',ContactController::class);
    Route::resource('informations',InfoController::class);
    Route::resource('suppliers',SupplierController::class);
    Route::resource('clients',ClientController::class);

});
