<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

//Welcome page
Route::get('/', function () { return view('home'); })->name('home.form');

//student Dashboard
Route::get('/student_dash', function () { return view('student_dash'); });

//Lecturer Dashboard
Route::get('/lecturer_dash', function () { return view('lecturer_dash'); });

//Accountant Dashboard
Route::get('/account_dash', function () { return view('account_dash'); });

//Adminstrator Dashboard
Route::get('/admin_dash', function () { return view('admin_dash'); })->name('adminDash.form');

//add lecturer
Route::get('/addLecturer', [AdminController::class, 'addLecturerForm'])->name('addLecturer.form');
Route::post('/addLecturer', [AdminController::class, 'LecturerForm'])->name('lecRoute.form');

//add student
Route::get('/addStudent', [AdminController::class, 'addStudentForm'])->name('addStudent.form');
Route::post('/addStudent', [AdminController::class, 'StudentForm'])->name('studentRoute.form');

//add marks
Route::get('/addMarks', [AdminController::class, 'addMarksForm'])->name('addMarks.form');
Route::post('/addMarks', [AdminController::class, 'MarksForm'])->name('MarksRoute.form');

//add course
Route::get('/addCourse', [AdminController::class, 'addCourseForm'])->name('addCourse.form');
Route::post('/addCourse', [AdminController::class, 'CourseForm'])->name('CourseRoute.form');

//view course
Route::get('viewCourse', [AdminController::class, 'index'])->name('viewCourse.form');

//view marks
Route::get('viewMarks', [AdminController::class, 'index5'])->name('viewMarks.form');

//view Lecturer
Route::get('viewLecturer', [AdminController::class, 'index2'])->name('viewLecturer.form');

//view Lecturer
Route::get('viewStudent', [AdminController::class, 'index3'])->name('viewStudent.form');

//Update Student Details
Route::get('edit-records',[AdminController::class, 'index4']);
Route::get('edit/{id}',[AdminController::class, 'show']);
Route::post('edit/{id}',[AdminController::class, 'show']);

//login
Route::post('/login',[AuthController::class,'login']);
Route::get('/logins',[AuthController::class,'logins'])->name('login.form');

//Add Units
Route::get('/addUnit', [AdminController::class, 'createUnitForm'])->name('addUnit.form');
Route::post('/addUnit', [AdminController::class, 'UnitForm'])->name('unit.form');
