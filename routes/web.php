<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/about',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/services',[HomeController::class, 'services'])->name('services');
Route::get('/packages',[HomeController::class, 'packages'])->name('packages');
Route::get('/contact-us',[HomeController::class, 'contact'])->name('contact');

Route::get('/kerala-tour-packages',[HomeController::class, 'keralaPackages'])->name('keralaPackages');
Route::get('/rajasthan-tour-packages',[HomeController::class, 'rajasthanPackages'])->name('rajasthanPackages');
Route::get('/himachal-tour-packages',[HomeController::class, 'himachalPackages'])->name('himachalPackages');
Route::get('/goa-tour-packages',[HomeController::class, 'goaPackages'])->name('goaPackages');
Route::get('/kashmir-tour-packages',[HomeController::class, 'kashmirPackages'])->name('kashmirPackages');
Route::get('/uttarakhand-tour-packages',[HomeController::class, 'uttarakhandPackages'])->name('uttarakhandPackages');
Route::get('/gujarat-tour-packages',[HomeController::class, 'gujaratPackages'])->name('gujaratPackages');
Route::get('/leh-ladakh-tour-packages',[HomeController::class, 'lehLadakhPackages'])->name('lehLadakhPackages');
Route::get('/tamil-nadu-tour-packages',[HomeController::class, 'tamilNaduPackages'])->name('tamilNaduPackages');
Route::get('/karnataka-tour-packages',[HomeController::class, 'karnatakaPackages'])->name('karnatakaPackages');
Route::get('/odisha-tour-packages',[HomeController::class, 'odishaPackages'])->name('odishaPackages');
Route::get('/sikkim-darjeeling-tour-packages',[HomeController::class, 'sikkimDarjeelingPackages'])->name('sikkimDarjeelingPackages');
Route::get('/north-east-tour-packages',[HomeController::class, 'northEastPackages'])->name('northEastPackages');
Route::get('/madhya-pradesh-tour-packages',[HomeController::class, 'madhyaPradeshPackages'])->name('madhyaPradeshPackages');
Route::get('/andaman-nicobar-tour-packages',[HomeController::class, 'andamanNicobarPackages'])->name('andamanNicobarPackages');
Route::get('/international-tours',[HomeController::class, 'internationalTours'])->name('internationalTours');





Route::get('/package/details/{id}', [HomeController::class, 'getPackageDetail'])->name('getPackageDetail');




Route::get('/thank-you',[HomeController::class, 'thanku'])->name('thanku');
Route::post('/send-contact-us-form',[HomeController::class, 'sendContactUs'])->name('sendContactUs');
Route::post('/send-query-form',[HomeController::class, 'sendQueryForm'])->name('sendQueryForm');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/add-package',[HomeController::class, 'addPackage'])->name('addPackage');
Route::get('/admin',[HomeController::class, 'admin'])->name('admin');
Route::post('/add-new-package', [App\Http\Controllers\HomeController::class, 'addNewPackage'])->name('addNewPackage');
Route::post('/admin/delete/record', [App\Http\Controllers\HomeController::class, 'deletePackage'])->name('deletePackage');

