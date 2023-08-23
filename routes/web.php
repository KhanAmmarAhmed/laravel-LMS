<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookStudentController;
use App\Http\Controllers\ReadingListController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
Route::get('/content', function () {
    return view('content');
}); */

/*******Admin********* */

Route::get('admin-index',[AdminController::class,'index']);
Route::get('add-new-admin',[AdminController::class,'addadmin']);
Route::post('save-admin',[AdminController::class,'saveadmin']);
Route::get('edit-admin/{admin_id}',[AdminController::class,'editadmin']);
Route::post('update-admin',[AdminController::class,'updateadmin']);
Route::get('delete-admin/{admin_id}',[AdminController::class,'deleteadmin']);



/*******books********* */


Route::get('book-index',[BookController::class,'index']);
Route::get('add-new-book',[BookController::class,'addbook']);
Route::post('save-book',[BookController::class,'savebook']);
Route::get('edit-book/{book_id}',[BookController::class,'editbook']);
Route::post('update-book',[BookController::class,'updatebook']);
Route::get('delete-book/{book_id}',[BookController::class,'deletebook']);


/*******Students********* */


Route::get('student-index',[StudentController::class,'index']);
Route::get('add-new-student',[StudentController::class,'addstudent']);
Route::post('save-student',[StudentController::class,'savestudent']);
Route::get('edit-student/{student_id}',[StudentController::class,'editstudent']);
Route::post('update-student',[StudentController::class,'updatestudent']);
Route::get('delete-student/{student_id}',[StudentController::class,'deletestudent']);

/*******************book_students******************************************************** */

Route::get('book-student-index',[BookStudentController::class,'index']);
Route::get('add-new-book-student',[BookStudentController::class,'create']);
Route::post('store-book-student',[BookStudentController::class,'storebook_student']);
Route::get('edit-book-student/{allocated_id}',[BookStudentController::class,'edit']);
Route::post('/book-student-update/{allocated_id}',[BookStudentController::class,'updatebook_student']);
Route::get('delete-book-student/{allocated_id}',[BookStudentController::class,'deletebook_student']);

/*******************reading_lists******************************************************** */

Route::get('reading-list-index',[ReadingListController::class,'index']);
Route::get('add-new-reading-list',[ReadingListController::class,'create']);
Route::post('store-reading-list',[ReadingListController::class,'storereading_list']);
Route::get('edit-reading-list/{bookmark_id}',[ReadingListController::class,'edit']);
Route::post('/reading-list-update/{bookmark_id}',[ReadingListController::class,'updatereading_list']);
Route::get('delete-reading-list/{bookmark_id}',[ReadingListController::class,'deletereading_list']);



/*******************Email Sending******************************************************** */

 
Route::get('/mail_form', [EmailController::class, 'open_form'])->name('mail_form');
Route::post('/send_mail', [EmailController::class, 'send_mail'])->name('send_mail');

/********************************Expense******************************************* */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
