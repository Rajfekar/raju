<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Students;
use App\Models\Notification;
use Session;
use App\Models\Books;
use App\Models\Ibooks;
use App\Models\Rbooks;
use App\Models\Qrcodelogin;
use Illuminate\Support\Facades\Hash;
/*
|--------------------------------------------------------------------------
| Indexing - All functions list  of principal dashboard
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



class PrincipalController extends Controller
{
    //
    public function index()
    {
        if (session()->has('principal')) {
            $s = User::where('libid', '=', session()->get('libid'))->first();
          } else {
            return redirect('/rit')->with('fail', 'please login first.');
          }
      
      
          return view('pdash.dash', compact('s'));
        
    }



    

  public function change_pass()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();

    return view('pdash.change_pass', compact('s'));
  }


  
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








  public function user_profile()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();


    return view('pdash.user_profile', compact('s'));
  }




  public function qr_code()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();


    return view('pdash.qr_code', compact('s'));
  }



  public function ct_marks()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();


    return view('pdash.ct_marks', compact('s'));
  }




  public function issued_books()
  {
    $data = array();
    if (session()->has('libid')) {
      $s = User::where('libid', '=', session()->get('libid'))->first();
    } else {
      return redirect('/rit')->with('fail', 'please login first.');
    }

    $issueb = Ibooks::where('userid', '=', session()->get('libid'))->get();
    return view('pdash.issued_books', compact('s', 'issueb'));
  }




  public function book_request()
  {
    $data = array();
    if (session()->has('libid')) {
      $s = User::where('libid', '=', session()->get('libid'))->first();
    } else {
      return redirect('/rit')->with('fail', 'please login first.');
    }

    $books = Books::all();
    return view('pdash.book_request', compact('s', 'books'));
  }



  public function attendance()
  {

    if (session()->has('libid')) {
      $s = User::where('libid', '=', session()->get('libid'))->first();
    } else {
      return redirect('/rit')->with('fail', 'please login first.');
    }

    $a = Attendance::all();
    return view('pdash.attendance', compact('s', 'a'));
  }




  public function log_out()
  {
    session()->flush();

    return redirect('/rit/login');
  }
}
