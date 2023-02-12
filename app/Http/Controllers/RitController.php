<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Students;
use App\Models\Notification;
use session;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\If_;
use PhpParser\Node\Stmt\Switch_;

/*
|--------------------------------------------------------------------------
| Indexing - All functions list  of RIT home  dashboard
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

class RitController extends Controller
{
  ////signin all member
  public function signin(Request $request)
  {

    //validating user
    $request->validate([
      'email' => 'required',
      'password' => 'required|max:15|min:5'
    ]);
    $user = User::where('email', $request->email)->orWhere('libid', $request->email)->orWhere('collegeid', $request->email)->first();

    if (!$user) {
      return redirect('/rit/login')->with('fail', 'this email or collegeid is not registered.');
    }

    //students
    if ($user->type == 0) {
      //   $user = User::find($request->email);
      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('student_id', $user->collegeid);
        $request->session()->put('student_name', $user->name);
        $request->session()->put('image', $user->image);
        $request->session()->put('libid', $user->libid);
        return redirect('/rit/studentdashboard');
      } else {
        return redirect('/rit/login')->with('fail', 'Password Not matches');
      }
    }

    //faculties
    elseif ($user->type == 1) {
      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('teacher_id', $user->collegeid);
        $request->session()->put('teacher_name', $user->name);
        $request->session()->put('image', $user->image);
        $request->session()->put('libid', $user->libid);
        return redirect('/rit/fdashboard');
      } else {
        return redirect('/rit/login')->with('fail', 'Password Not matches');
      }
    }

    //librarian
    elseif ($user->type == 2) {
      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('librarian_id', $user->collegeid);
        $request->session()->put('librarian_name', $user->name);
        $request->session()->put('image', $user->image);
        $request->session()->put('libid', $user->libid);
        $request->session()->put('qrcode7697477107', "helloraj");
        return redirect('/rit/libdashboard');
      } else {
        return redirect('/rit/login')->with('fail', 'Password Not matches');
      }
    }
    //principal
    elseif ($user->type == 3) {
      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('principal_id', $user->collegeid);
        $request->session()->put('principal_name', $user->name);
        $request->session()->put('image', $user->image);
        $request->session()->put('libid', $user->libid);
        return redirect('/rit/pdashboard');
      } else {
        return redirect('/rit/login')->with('fail', 'Password Not matches');
      }
    }
    //accountent
    elseif ($user->type == 4) {
      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('accountent_id', $user->collegeid);
        $request->session()->put('accountent_name', $user->name);
        $request->session()->put('image', $user->image);
        $request->session()->put('libid', $user->libid);
        return redirect('/rit/accountdashboard');
      } else {
        return redirect('/rit/login')->with('fail', 'Password Not matches');
      }
    }
    //HR
    elseif ($user->type == 5) {
      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('hr_id', $user->collegeid);
        $request->session()->put('hr_name', $user->name);
        $request->session()->put('image', $user->image);
        $request->session()->put('libid', $user->libid);
        return redirect('/rit/hrdashboard');
      } else {
        return redirect('/rit/login')->with('fail', 'Password Not matches');
      }
    }
    //T&P
    elseif ($user->type == 6) {
      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('tp_id', $user->collegeid);
        $request->session()->put('tp_name', $user->name);
        $request->session()->put('image', $user->image);
        $request->session()->put('libid', $user->libid);
        return redirect('/rit/tpdashboard');
      } else {
        return redirect('/rit/login')->with('fail', 'Password Not matches');
      }
    }
    //EMP
    elseif ($user->type == 7) {
      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('emp_id', $user->collegeid);
        $request->session()->put('emp_name', $user->name);
        $request->session()->put('image', $user->image);
        $request->session()->put('user_name', $user->libid);
        return redirect('/rit/empdashboard');
      } else {
        return redirect('/rit/login')->with('fail', 'Password Not matches');
      }
    } elseif ($user->type == 8) {
      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('admin_id', $user->collegeid);
        $request->session()->put('admin_name', $user->name);
        $request->session()->put('user_name', $user->name);
        return redirect('/rit/admindashboard');
      } else {
        return redirect('/rit/login')->with('fail', 'Password Not matches');
      }
    } else {
      return redirect('/rit/login')->with('fail', 'you are not member of ritee raipur');
    }
  }


  //register
  public function register(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'libid' => 'required|unique:users',
      'email' => 'required|unique:users',
      'password' => 'required',
      'image' => 'required',

    ]);

    $filename = "member_" . $request->libid . "." . $request->file('image')->getClientOriginalExtension();
    $request->file('image')->storeAs('public/students', $filename);

    $pass = Hash::make($request->password);
    $u = User::insert([
      'libid' => $request->libid,
      'name' => $request->name,
      'email' => $request->email,
      'password' => $pass,
      'image' => $filename,
      'sem' => $request->sem,
      'type' => $request->type,
      'branch' =>  $request->branch

    ]);

    if ($u) {
      return redirect('/rit/login')->with('success', 'successfully registered admin approve your request than you can login.');
    } else {
      return redirect('/rit')->with('fail', 'Registration Failed.');
    }
  }


  public function patelsir()
  {

    $u = User::all();
    return view('patelsir', compact('u'));
  }
  public function allqrcode()
  {
    $u = User::orderBy('branch')->get();
    return view('allqr', compact('u'));
  }
  public function index()
  {
    $notification = Notification::all();
    return view('home', compact('notification'));
  }

  public function login()
  {

    return view('studentdash.login');
  }

  public function ritlogin()
  {
    return view('qrsignin');
  }

  public function ritqrlogin(Request $request)
  {
    $request->validate([
      'email' => 'required',
      'pass' => 'required'
    ]);


    if ($request->email == "RIT000" || $request->email == "rit000" || $request->email == "riteelibrary@gmail.com") {
      date_default_timezone_set('Asia/Kolkata');
      $pass = "RIT" . date("dh");

      if ($pass == $request->pass) {
        $request->session()->put('qrcode7697477107', "helloraj");
        return redirect('/rit+raipur+qr+code+login+by+khemraj+fekar+7697477107+cse+301202219077+cs1945');
      } else {
        return redirect('/ritlogin')->with('fail', 'enter correct password');
      }
    } else {
      return redirect('/ritlogin')->with('fail', 'enter correct id');
    }
  }


  public function qra($result)
  {
    date_default_timezone_set('Asia/Kolkata');
    $id = $result;
    $student = User::where('collegeid', '=', $id)->first();
    if (!$student) {

      return redirect()->back()->with('fail', 'member not found.');
    } else {

      $attendance = Attendance::where('demo1', '=', date("d-m-Y"))->where('memberid', '=', $student->libid)->where('outtime', '=', '00:00 PM')->first();
      if ($attendance) {
        $res = Attendance::where('intime', '!=', date('h:i A'))->where('demo1', '=', date("d-m-Y"))->where('memberid', '=', $student->libid)->where('outtime', '=', '00:00 PM')->update([
          'outtime' => date('h:i A')
        ]);


        if ($res) {

          session()->put('sname', $student->name);
          session()->put('slibid', $student->libid);
          session()->put('sintime', $attendance->intime);
          session()->put('souttime', date('h:i A'));
          session()->put('simage', $student->image);
          return redirect()->back()->with('success', $student->name . ' left library at ' . date('h:i A'));
        } else {
          return redirect()->back()->with('fail', ' fail !! ' . $student->name . ' Come after few minute ');
        }
      } else {

        $a = Attendance::where('demo1', '=', date("d-m-Y"))->where('memberid', '=', $student->libid)->where('outtime', '=', date('h:i A'))->first();

        if ($a) {
          return redirect()->back()->with('fail', ' fail !! ' . $student->name . ' Come after few minute ');
        } else {

          $res = Attendance::insert([
            'name' => $student->name,
            'memberid' => $student->libid,
            'department' => $student->branch,
            'intime' => date('h:i A'),
            'outtime' => "00:00 PM",
            'demo1' => date("d-m-Y"),
            'sem' => $student->sem,
            'demo2' => $student->image,
          ]);
          if ($res) {
            session()->put('sname', $student->name);
            session()->put('slibid', $student->libid);
            session()->put('sintime', date('h:i A'));
            session()->put('souttime', "00:00 PM");
            session()->put('simage', $student->image);
            return redirect()->back()->with('success', $student->name . ' enter in library at ' . date('h:i A'));
          } else {
            return redirect()->back()->with('fail', ' fail !! Entry fail ' . $student->name);
          }
        }
      }
    }
  }
}
