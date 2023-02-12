<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Students;
use App\Models\User;
use App\Models\Books;
use App\Models\Ibooks;
use App\Models\Ritattendance;
use Illuminate\Support\Facades\Hash;
/*
|--------------------------------------------------------------------------
| Indexing - All functions list  of teacher dashboard
|--------------------------------------------------------------------------
| 1<----------->library dashboard       --------->line_number----->55
| 2<----------->issue book              --------->line_number----->
| 3<----------->change password         --------->line_number----->
| 4<----------->user profile            --------->line_number----->
| 5<----------->qr_code                 --------->line_number----->
| 6<----------->ct_marks                --------->line_number----->
| 7<----------->issued_books            --------->line_number----->
| 8<----------->book_request            --------->line_number----->
| 9<----------->book report             --------->line_number----->
| 10<---------->editbook                --------->line_number----->
| 11<---------->delete book             --------->line_number----->
| 12<---------->attendance              --------->line_number----->
| 13<---------->member list             --------->line_number----->
| 14<---------->logout                  --------->line_number----->
| 15<---------->edit notice             --------->line_number----->
| 16<---------->update notice           --------->line_number----->
| 17<---------->notice                  --------->line_number----->
| 18<---------->attendance now          --------->line_number----->
| 19<---------->add book                --------->line_number----->
| 20<---------->add member              --------->line_number----->
| 21<---------->add member 2            --------->line_number----->
| 22<---------->book not recieved       --------->line_number----->
| 23<---------->book recieved           --------->line_number----->
| 24<---------->issue book 2            --------->line_number----->
| 25<---------->qr attendance           --------->line_number----->
| 26<---------->add book post method    --------->line_number----->
| 27<---------->updatebook post         --------->line_number----->
| 28<---------->upcoming.               --------->line_number----->
|---------------------------------------------------------------------------
*/

class TeacherController extends Controller
{
  //
  public function index()
  {
    
      $s = User::where('libid', '=', session()->get('libid'))->first();
    return view('fdash.dash', compact('s'));
  }


  public function change_pass()
  {
    $s = User::where('collegeid', '=', session()->get('teacher_id'))->first();

    return view('fdash.change_pass', compact('s'));
  }





  public function user_profile()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();


    return view('fdash.user_profile', compact('s'));
  }




  public function qr_code()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();


    return view('fdash.qr_code', compact('s'));
  }



  public function ct_marks()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();


    return view('fdash.ct_marks', compact('s'));
  }




  public function issued_books()
  {
    $data = array();
   
      $s = User::where('libid', '=', session()->get('libid'))->first();
   

    $issueb = Ibooks::where('userid', '=', session()->get('libid'))->get();
    return view('fdash.issued_books', compact('s', 'issueb'));
  }




  public function book_request()
  {
    $data = array();
   
      $s = User::where('libid', '=', session()->get('libid'))->first();
   

    $books = Books::all();
    return view('fdash.book_request', compact('s', 'books'));
  }



  public function attendance()
  {

    
      $s = User::where('libid', '=', session()->get('libid'))->first();
  

    $a = Ritattendance::where('subject', '=', 'Distributed System')->get();
    return view('fdash.attendance', compact('s', 'a'));
  }




  public function log_out()
  {
    session()->flush();

    return redirect('/rit/login');
  }

  public function scanner()
  {
    $t = session()->get('user_name');
    $a = Ritattendance::all();

    return view('fdash.scanner', compact('a', 't'));
  }



  public function attendanceqr($s_id, $f_id)
  {


    date_default_timezone_set('Asia/Kolkata');
    $id = $s_id;
    $student = User::where('collegeid', '=', $id)->first();

    if (!$student) {
      return redirect()->back()->with('fail', 'student not found.');
    } else {

      $res = Ritattendance::insert([
        'collegeid' => $student->collegeid,
        'name' => $student->name,
        'rollno' => $student->rollno,
        'r3' => $student->sem,
        'r1' => 1,
        'r2' => $student->branch,
        'date' => date('d/m/y h:i A'),
        'subject' => "Distributed System"

      ]);
      if($res)
      {
        return redirect()->back()->with('success', 'Attendance Given To '.$student->name);

      }
      else{
        return redirect()->back()->with('fail', 'Attendance Failed !! '.$student->name);


      }

    }
  }
  // /rit/fdashboard/scanner/




  
  //update password
  public function update_pass(Request $request)
  {
    $request->validate([
      'cpassword' => 'required',
      'npassword' => 'required',
      'cnpassword' => 'required|same:npassword',
      'id' => 'required'
    ]);
    $pass = Hash::make($request->npassword);
    $user = User::where('id', '=', $request->id)->first();
    if (Hash::check($request->cpassword, $user->password)) {
      $update = User::where('id', '=', $request->id)->update([
        'password' => $pass,

      ]);
      if ($update) {
        return redirect()->back()->with('success', 'successfully update your password...');
      } else {
        return redirect()->back()->with('fail', 'password not update!');
      }
    } else {
      return redirect()->back()->with('fail', 'Password Not matches');
    }
  }


}
