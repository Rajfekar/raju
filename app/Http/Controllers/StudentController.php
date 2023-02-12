<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Students;
use App\Models\User;
use App\Models\Books;
use App\Models\Rbooks;
use App\Models\Fees;
use App\Models\Feepaid;
use App\Models\Ibooks;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Indexing - All functions for student dashboard
|------------------------------------------------------------------------------
| 1<------------->student dashboard           ------->line_number----->10
| 2<------------->change password             ------->line_number----->10
| 3<------------->update password method=post ------->line_number----->10
| 4<------------->update profile              ------->line_number---- >10
| 5<------------->update profile method=post  ------->line_number----->10
| 6<------------->user profile                ------->line_number----->10
| 7<------------->qr_code                     ------->line_number----->10
| 8<------------->issued book report          ------->line_number----->10
| 9<------------->book request                ------->line_number----->10
| 10<------------>student attendance          ------->line_number----->10
| 11<------------>ct marks                    ------->line_number----->10
| 12<------------>logout                      ------->line_number----->10
| 13<------------>student fee details         ------->line_number----->10
| 14<------------>student invoice             ------->line_number----->10
| 15<------------>student fee payment now     ------->line_number----->10
| 16<------------>payment done                ------->line_number----->10
| 17<------------>book request method-post    ------->line_number----->10
|--------------------------------------------------------------------------------
*/



class StudentController extends Controller
{


  //| 1. student dashboard.
  public function index()
  {
    return view('studentdash.dash');
  }

  //| 2. change password 
  public function change_pass()
  {
    return view('studentdash.change_pass');
  }

  //| 3. update password
  public function update_pass(Request $request)
  {
    $request->validate([
      'cpassword' => 'required',
      'npassword' => 'required',
      'cnpassword' => 'required|same:npassword',
      'id' => 'required'
    ]);
    $pass = Hash::make($request->npassword);
    $user = User::where('collegeid', '=', $request->id)->first();
    if (Hash::check($request->cpassword, $user->password)) {
      $update = User::where('collegeid', '=', $request->id)
        ->update(['password' => $pass]);
      if ($update) {
        return redirect()->back()->with('success', 'successfully update your password...');
      } else {
        return redirect()->back()->with('fail', 'password not update!');
      }
    } else {
      return redirect()->back()->with('fail', 'Password Not matches');
    }
  }


  //| 4. update profile
  public function update_profile()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();
    return view('studentdash.update_profile', compact('s'));
  }

  //| 5. update students data
  public function update_data(Request $request)
  {
    $request->validate([
      'collegeid' => 'required|min:1|max:15',
      'libid' => 'required|min:1|max:10',
      'gender' => 'required|min:1|max:2',
      'course' => 'required|min:1|max:2',
      'branch' => 'required|min:1|max:2',
      'sem' => 'required|min:1|max:2',
      'image' => 'max:500'

    ]);
    if ($request->image != NULL) {
      $filename = $request->collegeid . "raj" . date('dmYhis') . "." . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('public/students', $filename);
      $raj = User::where('collegeid', '=', $request->collegeid)
        ->update([
          'email' => $request->email,
          'gender' => $request->gender,
          'course' => $request->course,
          'branch' => $request->branch,
          'address' => $request->address,
          'enrolmentid' => $request->enrolmentid,
          'rollno' => $request->rollno,
          'mobile' => $request->mobile,
          'sem' => $request->sem,
          'image' => $filename,
          'admissiondate' => "10/12/2022",
          'status' => 0
        ]);
        $request->session()->put('image', $filename);

    } else {
      $raj = User::where('collegeid', '=', $request->collegeid)
        ->update([
          'email' => $request->email,
          'gender' => $request->gender,
          'course' => $request->course,
          'branch' => $request->branch,
          'address' => $request->address,
          'enrolmentid' => $request->enrolmentid,
          'rollno' => $request->rollno,
          'mobile' => $request->mobile,
          'sem' => $request->sem,
          'admissiondate' => "10/12/2022",
          'status' => 0
        ]);
    }
    if ($raj) {
      return redirect()->back()->with('success', 'successfully update your data...');
    } else {
      return redirect()->back()->with('fail', 'data not update!');
    }
  }
  //| 6. user profile
  public function user_profile()
  {
    return view('studentdash.user_profile');
  }

  //| 7. qr_code
  public function qr_code()
  {
    return view('studentdash.qr_code');
  }

  //| 8. issued book report
  public function issued_books()
  {
    $issueb = Ibooks::where('userid', '=', session()->get('libid'))->get();
    if ($issueb) {
      return view('studentdash.issued_books', compact('issueb'));
    }
  }
  
  //| 9. book request 
  public function book_request()
  {
    $books = Books::all();
    return view('studentdash.book_request', compact('books'));
  }
  
  //| 10. student attendance
  public function attendance()
  {
    $a = Attendance::where('memberid', '=', session()->get('libid'))->get();
    return view('studentdash.attendance', compact('a'));
  }

  //| 11. ct marks
  public function ct_marks()
  {
    return view('studentdash.ct_marks', compact('s'));
  }

  
  //| 12. logout
  public function log_out()
  {
    session()->flush();
    return redirect('/rit/login');
  }

  //| 13. student fee details
  public function fees_details()
  {
    $fees = Fees::where('collegeid', '=', session()->get('student_id'))->get();
    return view('studentdash.fees_details', compact('fees'));
  }

  //| 14. student invoice
  public function invoice($id)
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();
    $fees = Fees::where('id', '=', $id)->first();
    return view('studentdash.invoice', compact('s', 'fees'));
  }

 
  //| 15. student fee payment now
  public function paynow($id)
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();
    $fees = Fees::where('id', '=', $id)->first();
    return view('studentdash.paynow', compact('s', 'fees'));
  }


  //| 16. payment done
  public function payment_done(Request $request)
  {

    $request->validate([
      'upi' => 'required',
      'date' => 'required',
      'time' => 'required'

    ]);

    $res = Feepaid::insert([
      'upi_ref_no' => $request->upi,
      'transaction_date' => $request->date,
      'transaction_time' => $request->time,
      // 'q1' => $request->collegeid,

    ]);

    if ($res) {
      return redirect('/rit/studentdashboard/')->with('success', 'successfully paid your fees update within 24 hour.');
    } else {
      return redirect('/rit/studentdashboard/')->with('fail', 'Fail!! payment faild retry after one hour.');
    }
  }


  //| 17. book request method-post
  public function bookrequest($id, $libid)
  {
    $rbook = Books::where('id', '=', $id)->first();
    $bs = Rbooks::where('userid', '=', $libid)->where('bookid', '=', $rbook->bookid)->first();
    if ($bs) {
      return redirect('/rit/studentdashboard/book_request')->with('fail', 'you already requested for this book');
    }
    $ruser = User::where('libid', '=', $libid)->first();
    $user = new Rbooks;
    $user->userid = $ruser->libid;
    $user->username = $ruser->name;
    $user->bookid = $rbook->bookid;
    $user->bookname = $rbook->name;
    $res = $user->save();
    if ($res) {
      return redirect('/rit/studentdashboard/book_request')->with('success', 'book requested successfully!');
    } else {
      return redirect('/rit/studentdashboard/book_request')->with('fail', ' fail !! book not requested');
    }
  }
}
