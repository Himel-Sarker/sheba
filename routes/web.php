<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\backend\DoctorsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestController;
use App\Models\Doctor;
use App\Models\Test;
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

Route::get('/home',[FrontendController::class,'index'])->name('homepage');
Route::post('/appointment', [FrontendController::class, 'store'])->name('ap.store');
Route::get('/our-doctors',[FrontendController::class,'view'])->name('doctors');
Route::get('/find-doctors',[FrontendController::class,'find'])->name('doctors.find');
Route::post('/find-doctors',[FrontendController::class,'finddoc'])->name('doctors.findby');
Route::get('/our-pricelist',[FrontendController::class,'pricelist'])->name('pricelist');
Route::post('/our-pricelist/filter_by',[FrontendController::class,'filter'])->name('pricelist.filter');
Route::get('/single-doctor/{id}', [FrontendController::class, 'singleDoctor'])->name('view_doctor');
Route::get('/apoint/doctor', [FrontendController::class, 'makeAppoint'])->name('make_appoint');











require __DIR__.'/auth.php';

Route::get('/',[HomeController::class,'index'])->middleware(['auth'])->name('dashboard');



Route::prefix('/admin')->middleware(['auth'])->group(function(){

    Route::get('/',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/doctors', [DoctorController::class,'index'])->name('doctors.index');
    Route::get('/doctors/create', [DoctorController::class,'create'])->name('doctors.create');

    Route::post('/doctors/store',[DoctorController::class,'store'])->name('doctors.store');
    Route::get('/doctors/{id}',[DoctorController::class,'show'])->name('doctors.show');
    Route::delete('/doctors/{id}',[DoctorController::class,'destroy'])->name('doctors.destroy');

    Route::get('/appointments', [AppointmentController::class,'index'])->name('appointments');
    Route::get('/appointmentlist/report', [AppointmentController::class,'listpdf'])->name('appointment.pdf');
    Route::patch('/appointments/update/{appointment}', [AppointmentController::class,'update_approval'])->name('update.approval.status');
    Route::delete('/appointment/delete/{id}',[AppointmentController::class,'appointment_delete'])->name('appointment_delete');

    Route::get('/departments', [DepartmentController::class,'index'])->name('departments.index');
    Route::get('/departments/create', [DepartmentController::class,'create'])->name('departments.create');
    Route::post('/departments/add', [DepartmentController::class,'store'])->name('departments.store');

    Route::get('/test-departments/create', [TestController::class,'create'])->name('test.create');
    Route::get('/test-departments', [TestController::class,'index'])->name('test.index');
    Route::post('/test-departments/add', [TestController::class,'store'])->name('test.store');

    Route::get('/service/create', [ServiceController::class,'create'])->name('service.create');
    Route::get('/our-service', [ServiceController::class,'index'])->name('service.index');
    Route::post('/service/add', [ServiceController::class,'store'])->name('service.store');
    Route::get('/service/pircelist-download', [ServiceController::class,'pdf'])->name('pricelist.pdf');





    Route::group(['as'=>'admin.'],function (){
        Route::resource('/doctor',DoctorsController::class);
    });

});


Route::prefix('/doctor')->middleware(['auth'])->group(function(){

    Route::get('/',[DoctorController::class,'index'])->name('doctor.dashboard');

});


Route::prefix('/patient')->middleware(['auth'])->group(function(){

    Route::get('/',[PatientController::class,'index'])->name('patient.dashboard');

});

