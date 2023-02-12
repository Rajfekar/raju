<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Indexing - All functions list for accountent dashboard
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

class AccountentController extends Controller
{
    public function index()
    {
        $s = User::where('collegeid','=',session()->get('emp_id'))->first();
        return view('accountdash.dash',compact('s'));
    }

    public function change_pass()
  {
    $s = User::where('collegeid', '=', session()->get('emp_id'))->first();

    return view('accountdash.change_pass', compact('s'));
  }




  public function log_out()
  {
    session()->flush();

    return redirect('/rit/login');
  }


  public function qr_code()
  {
    $s = User::where('collegeid', '=', session()->get('emp_id'))->first();

    return view('accountdash.qr_code', compact('s'));
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
    $user = User::where('collegeid', '=', $request->id)->first();
    if (Hash::check($request->cpassword, $user->password)) {
      $update = User::where('collegeid', '=', $request->id)->update([
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



  public function transactions()
  {
    echo "transanctions list";
    die;
  }

}
