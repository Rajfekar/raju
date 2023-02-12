<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\AccountentController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\TpController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RitController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes list as laravel 9.5
|--------------------------------------------------------------------------
| 0<-----------------------> STUDENT    --------->line_number--------->10
| 1<-----------------------> FACULTY    --------->line_number--------->10
| 2<-----------------------> LIBRARIAN  --------->line_number--------->10
| 3<-----------------------> PRINCIPAL  --------->line_number--------->10
| 4<-----------------------> ACCOUNTENT --------->line_number--------->10
| 5<-----------------------> HRDASH     --------->line_number--------->10
| 6<-----------------------> TPDASH     --------->line_number--------->10
| 7<-----------------------> EMPDASH    --------->line_number--------->10
| 8<-----------------------> ADMINDASH  --------->line_number--------->10
| 9<-----------------------> RIT HOME   --------->line_number--------->10
|----------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(ProfileController::class)->middleware('auth')->group(function () {
    Route::get('/profile', 'edit')->name('profile.edit');
    Route::patch('/profile', 'update')->name('profile.update');
    Route::delete('/profile', 'destroy')->name('profile.destroy');
});

//0. student dashboard
Route::controller(StudentController::class)->middleware('student')->group(function () {
    Route::get('/rit/studentdashboard', 'index');
    Route::get('/rit/studentdashboard/change_pass', 'change_pass');
    Route::post('/rit/studentdashboard/change_pass/updatepass/', 'update_pass');
    Route::post('/rit/studentdashboard/update_profile/updatedata', 'update_data');
    Route::get('/rit/studentdashboard/update_profile', 'update_profile');
    Route::get('/rit/studentdashboard/user_profile', 'user_profile');
    Route::get('/rit/studentdashboard/qr_code', 'qr_code');
    Route::get('/rit/studentdashboard/ct_marks', 'ct_marks');
    Route::get('/rit/studentdashboard/issued_books', 'issued_books');
    Route::get('/rit/studentdashboard/book_request', 'book_request');
    Route::get('/rit/studentdashboard/attendance', 'attendance');
    Route::get('/rit/studentdashboard/request/{id}/{libid}', 'bookrequest');
    Route::get('/rit/studentdashboard/fees_details', 'fees_details');
    Route::get('/rit/studentdashboard/invoice/reciept/{id}', 'invoice');
    Route::get('/rit/studentdashboard/invoice/paynow/{id}', 'paynow');
    Route::post('/rit/studentdashboard/payment_process/payment_recieved', 'payment_done')->name('payment_done');
    Route::get('/rit/studentdashboard/log_out', 'log_out');
});

//1. faculty dashboard start from here
Route::controller(TeacherController::class)->middleware('teacher')->group(function () {
    Route::get('/rit/fdashboard', 'index');
    Route::get('rit/fdashboard/user_profile', 'user_profile');
    Route::get('/rit/fdashboard/change_pass', 'change_pass');
    Route::get('/rit/fdashboard/user_profile', 'user_profile');
    Route::get('/rit/fdashboard/qr_code', 'qr_code');
    Route::get('/rit/fdashboard/ct_marks', 'ct_marks');
    Route::get('/rit/fdashboard/issued_books', 'issued_books');
    Route::get('/rit/fdashboard/book_request', 'book_request');
    Route::get('/rit/fdashboard/attendance', 'attendance');
    Route::get('/rit/fdashboard/log_out', 'log_out');
    Route::get('/rit/fdashboard/scanner', 'scanner');
    Route::get('/rit/fdashboard/scanner/{id}/{libid}', 'attendanceqr');
    Route::post('/rit/fdashboard/change_pass/updatepass/', 'update_pass');
    Route::post('/rit/fdashboard/update_profile/updatedata', 'update_data');
});


//2.  librarian_dashboard
Route::controller(LibraryController::class)->middleware('library')->group(function () {
    Route::get('/rit/libdashboard', 'index');
    Route::get('/rit/libdashboard/change_pass', 'change_pass');
    Route::get('/rit/libdashboard/user_profile', 'user_profile');
    Route::get('/rit/libdashboard/qr_code', 'qr_code');
    Route::get('/rit/libdashboard/ct_marks', 'ct_marks');
    Route::get('/rit/libdashboard/issued_books', 'issued_books');
    Route::get('/rit/libdashboard/book_request', 'book_request');
    Route::get('/rit/libdashboard/book_report', 'book_report');
    Route::get('/rit/libdashboard/add_book', 'add_book');
    Route::get('/rit/libdashboard/add_member', 'add_member');
    Route::get('/rit/libdashboard/attendance', 'attendance');
    Route::get('/rit/libdashboard/attendance/datewise', 'attendancedatewise');
    Route::post('/rit/libdashboard/attendance/datewise', 'attendancedatewise2');
    Route::get('/rit/libdashboard/log_out', 'log_out');
    Route::get('/rit/libdashboard/memberlist', 'memberlist');
    Route::get('/rit/libdashboard/editmember/{collegeid}', 'editmember');
    Route::get('/rit/libdashboard/issuebook', 'issuebook');
    Route::get('/rit/libdashboard/notice', 'notice');
    Route::post('/rit/libdashboard/change_pass/updatepass/', 'update_pass');
    Route::post('/rit/libdashboard/update_profile/updatedata', 'update_data');
    Route::get('/rit/libdashboard/attendancenow/{libid}', 'attendancenow')->name('attendancenow');
    Route::post('/rit/libdashboard/add_member2', 'add_member2');
    Route::get('/rit/libdashboard/issued_book/recieved/{bookid}/{idate}/{userid}', 'book_recieved');
    Route::get('/rit/libdashboard/issued_book/notrecieved/{userid}', 'book_not_recieved');
    Route::post('/rit/libdashboard/issuebook', 'issuebook2')->name('issuebook');
    Route::post('/rit/libdashboard/addbook', 'addbook')->name('addbook');
    Route::post('/rit/libdashboard/updatebook', 'updatebook')->name('updatebook');
    Route::post('/rit/libdashboard/updatemember', 'updatemember')->name('updatemember');
    Route::get('/rit/libdashboard/editbook/{bookid}', 'editbook');
    Route::get('/rit/libdashboard/deletebook/{bookid}', 'deletebook');
    Route::get('/rit/libdashboard/notice/{id}', 'notice');
    Route::get('/rit/libdashboard/editnotice/{id}', 'editnotice')->name('editnotice');
    Route::post('/rit/libdashboard/updatenotice', 'updatenotice')->name('updatenotice');
    Route::get('/rit/libdashboard/approve/{bookid}/{libid}', 'approve')->name('approve');
    Route::get('/rit/libdashboard/reject/{bookid}/{libid}', 'reject')->name('reject');
});


//3. principal dashboard
Route::controller(PrincipalController::class)->middleware('principal')->group(function () {
    Route::get('/rit/pdashboard', 'index');
    Route::get('/rit/pdashboard/change_pass', 'change_pass');
    Route::get('/rit/pdashboard/user_profile', 'user_profile');
    Route::get('/rit/pdashboard/qr_code', 'qr_code');
    Route::get('/rit/pdashboard/ct_marks', 'ct_marks');
    Route::get('/rit/pdashboard/issued_books', 'issued_books');
    Route::get('/rit/pdashboard/book_request', 'book_request');
    Route::get('/rit/pdashboard/attendance', 'attendance');
    Route::get('/rit/pdashboard/log_out', 'log_out');
    Route::post('/rit/pdashboard/change_pass/updatepass/', 'update_pass');
    Route::post('/rit/pdashboard/update_profile/updatedata', 'update_data');
});


// 4. accountent dashboard
Route::controller(AccountentController::class)->middleware('account')->group(function () {
    Route::get('/rit/accountdashboard', 'index');
    Route::get('/rit/accountdashboard/qr_code', 'qr_code');
    Route::get('/rit/accountdashboard/change_pass', 'change_pass');
    Route::post('/rit/accountdashboard/change_pass/updatepass/', 'update_pass');
    Route::get('/rit/accountdashboard/log_out', 'log_out');
    Route::get('/rit/accountdashboard/transactions', 'transactions');
});


// 5. hr dashboard
Route::controller(HrController::class)->middleware('hr')->group(function () {
    Route::get('/rit/hrdashboard', 'index');
    Route::get('/rit/hrdashboard/qr_code', 'qr_code');
    Route::get('/rit/hrdashboard/change_pass', 'change_pass');
    Route::post('/rit/hrdashboard/change_pass/updatepass/', 'update_pass');
    Route::get('/rit/hrdashboard/log_out', 'log_out');
});

// 6. tp dashboard
Route::controller(TpController::class)->middleware('tp')->group(function () {
    Route::get('/rit/tpdashboard', 'index');
    Route::get('/rit/tpdashboard/qr_code', 'qr_code');
    Route::get('/rit/tpdashboard/change_pass', 'change_pass');
    Route::post('/rit/tpdashboard/change_pass/updatepass/', 'update_pass');
    Route::get('/rit/tpdashboard/log_out', 'log_out');
});

//7. employee dashboard
Route::controller(EmpController::class)->middleware('emp')->group(function () {
    Route::get('/rit/empdashboard', 'index');
    Route::get('/rit/empdashboard/qr_code', 'qr_code');
    Route::get('/rit/empdashboard/change_pass', 'change_pass');
    Route::post('/rit/empdashboard/change_pass/updatepass/', 'update_pass');
    Route::get('/rit/empdashboard/log_out', 'log_out');
});


//8. admin dashboard
Route::controller(AdminController::class)->middleware('admin')->group(function () {
    Route::get('/rit/admindashboard', 'index');
    Route::get('/rit/admindashboard/qr_code', 'qr_code');
    Route::get('/rit/admindashboard/change_pass', 'change_pass');
    Route::post('/rit/admindashboard/change_pass/updatepass/', 'update_pass');
    Route::get('/rit/admindashboard/log_out', 'log_out');
});
//rit home dashboard
Route::controller(RitController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/rit/register', 'register');
    Route::post('/rit/signin', 'signin');
    Route::get('/patelsir', 'patelsir');
    Route::get('/qranimation', 'qranimation');
    Route::get('/allqrcode', 'allqrcode');
    Route::get('/ritlogin', 'ritlogin');
    Route::post('/ritqrlogin', 'ritqrlogin')->name('qrlogin');
    Route::get('/rit/login', 'login')->middleware('login');
    Route::get('/rit/quick/{result}', 'qra')->middleware('qrcode');
});

Route::get('getallsession', [StudentController::class, 'getallsession'])->name('getallsession')->middleware('qrcode');
Route::get('/rit+raipur+qr+code+login+by+khemraj+fekar+7697477107+cse+301202219077+cs1945', [LibraryController::class, 'qrat'])->middleware('qrcode');
require __DIR__ . '/auth.php';
