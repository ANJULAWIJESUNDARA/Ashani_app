<?php

use App\DeathCertificate;
use App\Http\Controllers\CashRecieptController;
use App\Http\Controllers\DeathCertificateController;
use App\Http\Controllers\ExpatriatesController;
use App\Http\Controllers\FormerGNController;
use App\Http\Controllers\IncomeCertificatesController;
use App\Http\Controllers\RetireesController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
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

Route::get('send-mail', function () {




    dd("Email is Sent.");
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//
Route::resource('retirees' ,'RetireesController' );
Route::get('admin/retirees/delete/{id}',  [App\Http\Controllers\RetireesController::class ,'destroy'])->name('retirees.destroy');

//

Route::resource('income-certificate' ,'IncomeCertificatesController' );
Route::get('admin/income-certificate/delete/{id}',  [App\Http\Controllers\IncomeCertificatesController::class ,'destroy'])->name('income-certificate.destroy');

//
Route::resource('death-certificate' ,'DeathCertificateController' );
Route::get('admin/death-certificate/delete/{id}',  [App\Http\Controllers\DeathCertificateController::class ,'destroy'])->name('death-certificate.destroy');

//
Route::resource('cash-reciept' ,'CashRecieptController' );
Route::get('admin/cash-reciept/delete/{id}',  [App\Http\Controllers\CashRecieptController::class ,'destroy'])->name('expatriate.destroy');
//
Route::resource('expatriate' ,'ExpatriatesController' );
Route::get('admin/expatriate/delete/{id}',  [App\Http\Controllers\ExpatriatesController::class ,'destroy'])->name('expatriate.destroy');
//
Route::resource('former-gn' ,'FormerGNController' );
Route::get('admin/former-gn/delete/{id}',  [App\Http\Controllers\FormerGNController::class ,'destroy'])->name('former-gn.destroy');

Route::resource('search' ,'SearchController' );
Route::resource('inquiries' ,'InquireisController' );
Route::get('admin/inquiries/delete/{id}',  [App\Http\Controllers\InquireisController::class ,'destroy'])->name('inquireis.destroy');
Route::get('admin/inquiries/respond/{id}',  [App\Http\Controllers\InquireisController::class ,'respond'])->name('inquireis.respond');
//
Route::resource('retirees' ,'RetireesController' );
Route::get('admin/retirees/delete/{id}',  [App\Http\Controllers\RetireesController::class ,'destroy'])->name('retirees.destroy');
Route::resource('private-sector' ,'PrivateSectorEmployeeController' );
Route::get('admin/private-sector/delete/{id}',  [App\Http\Controllers\PrivateSectorEmployeeController::class ,'destroy'])->name('admin.private-sector.delete');
Route::resource('security-officer' ,'SecurityOfficerController' );
Route::get('admin/security-officer/delete/{id}',  [App\Http\Controllers\SecurityOfficerController::class ,'destroy'])->name('admin.security-officer.delete');

Route::get('/contact' , function(){

    return view('contact');
}
);
