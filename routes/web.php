
<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/','front_end/index');
Route::view('/about','front_end/about');
Route::view('/privacy-policy','front_end/privacy');
Route::view('/disclaimer','front_end/disclaimer');
Route::view('/terms-and-conditions','front_end/terms-and-conditions');

Route::get('search',[App\Http\Controllers\AdminController::class,'search'])->name('search');


Route::get('contact-us',[App\Http\Controllers\AdminController::class,'contact'])->name('admin');
Route::post('contact-us',[App\Http\Controllers\AdminController::class,'contact_db'])->name('admin');


Route::get('private-jobs',[App\Http\Controllers\AdminController::class,'privatejobdetails'])->name('admin');

Route::get('/private-jobs/{tab}',[App\Http\Controllers\AdminController::class,'privatejobdetailsdescribtion'])->name('admin');

Route::match(['get','post'],'/admin/login',[App\Http\Controllers\AdminController::class,'login'])->name('admin');

Route::get('government-jobs',[App\Http\Controllers\AdminController::class,'govtjobdetails'])->name('admin');
Route::get('/',[App\Http\Controllers\AdminController::class,'govtjobdetail'])->name('admin');

Route::get('government-jobs/{tab}',[App\Http\Controllers\AdminController::class,'jobdetailsdescribtion'])->name('admin');


Route::get('/qa-and-qc-testing',[App\Http\Controllers\AdminController::class,'qas_enquiry'])->name('admin');

Route::get('/is-codes',[App\Http\Controllers\AdminController::class,'iscodes_enquiry'])->name('admin');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['namespace'=>'Admin','middleware'=>['auth'],],function(){
    Route::get('/admin/adminpages/qa',[App\Http\Controllers\AdminController::class,'qa'])->name('admin');
    Route::post('/admin/adminpages/qa',[App\Http\Controllers\AdminController::class,'qa_db'])->name('admin');
    Route::get('/admin/adminpages/iscode',[App\Http\Controllers\AdminController::class,'iscode'])->name('admin');
    Route::post('/admin/adminpages/iscode',[App\Http\Controllers\AdminController::class,'iscode_db'])->name('admin');
    Route::get('/admin/adminpages/govtjob',[App\Http\Controllers\AdminController::class,'govtjob'])->name('admin');
    Route::post('/admin/adminpages/govtjob',[App\Http\Controllers\AdminController::class,'govtjob_db'])->name('admin');
    Route::get('/admin/adminindex',[App\Http\Controllers\AdminController::class,'adminindex'])->name('admin');
    Route::get('/admin/adminpages/privatejob',[App\Http\Controllers\AdminController::class,'privatejob'])->name('admin');
    Route::post('/admin/adminpages/privatejob',[App\Http\Controllers\AdminController::class,'privatejob_db'])->name('admin');
    Route::get('/admin/adminpages/contact',[App\Http\Controllers\AdminController::class,'contactdisplay'])->name('admin');
});
