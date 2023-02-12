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

use function GuzzleHttp\Promise\all;

// 1. student dash board.
// 2. changepassword
// 3. user user_profile
// 4. update data
// 5. qr code. 
// 6. ct ct_marks
// 7. issued book
// 8. book request
// 9. Logout
// 10. register 
// 11. update pass
// 12. signin all type of  users.
// 13. attendance 
// 14. fees details
// 15. invoice
// 16. paynow.


class StudentDash extends Controller
{
  //all student dashboard 
  public function studash()
  {
   
      $s = User::where('libid', '=', session()->get('libid'))->first();
  
    return view('studentdash.dash', compact('s'));
  }



  ///change password 
  public function change_pass()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();

    return view('studentdash.change_pass', compact('s'));
  }


  //user profile

  public function update_profile()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();
    return view('studentdash.update_profile', compact('s'));
  }

  public function user_profile()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();
    return view('studentdash.user_profile', compact('s'));
  }
  //update date
  public function update_data(Request $request)
  {

   
    $request->validate([
      'collegeid' => 'required|min:1|max:15',
      'libid' => 'required|min:1|max:10',
      'email' => 'required|min:1|max:30',
      'mobile' => 'required|min:1|max:15',
      'enrolmentid' => 'required|min:1|max:15',
      'rollno' => 'required|min:1|max:20',
      'gender' => 'required|min:1|max:2',
      'course' => 'required|min:1|max:2',
      'branch' => 'required|min:1|max:2',
      'sem' => 'required|min:1|max:2',
      'address' => 'required|min:1|max:100',
      // 'addmissiondate' => 'required|min:1|max:20',
      'image' => 'max:500',

    ]);
   $filename = $request->collegeid."helloraj". date('his');
   if($request->image!=NULL)
  {
    $filename = "raj_" . date('his') . $request->libid . "." . $request->file('image')->getClientOriginalExtension();
    $request->file('image')->storeAs('public/students', $filename);

  }
    
    $raj = User::where('collegeid', '=', $request->collegeid)->update([
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
    if ($raj) {
      return redirect()->back()->with('success', 'successfully update your data...');
    } else {
      return redirect()->back()->with('fail', 'data not update!');
    }
  }


  //qr code
  public function qr_code()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();


    return view('studentdash.qr_code', compact('s'));
  }


  //ct marks
  public function ct_marks()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();


    return view('studentdash.ct_marks', compact('s'));
  }



  //issued book report
  public function issued_books()
  {
    $data = array();
      $s = User::where('libid', '=', session()->get('libid'))->first();
   
    $issueb = Ibooks::where('userid', '=', session()->get('libid'))->get();
    return view('studentdash.issued_books', compact('s', 'issueb'));
  }



  //book request 
  public function book_request()
  {
    $data = array();
   
      $s = User::where('libid', '=', session()->get('libid'))->first();
  

    $books = Books::all();
    return view('studentdash.book_request', compact('s', 'books'));
  }



  //logout
  public function log_out()
  {
    session()->flush();

    return redirect('/rit/login');
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
    $u = Students::insert([
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



  //signin all member
  
  public function signin(Request $request)
  {

    //validating user
    $request->validate([
      'email' => 'required',
      'password' => 'required|max:15|min:5'
    ]);
    $user = User::where('email', $request->email)->orWhere('libid', $request->email)->orWhere('collegeid', $request->email)->first();

    if (!$user) {
      return redirect('/rit/login')->with('fail', 'this email & collegeid is not registered.');
    }


    //students
    if ($user->type == 0) {
      //   $user = User::find($request->email);
      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('student_id', $user->collegeid);
        $request->session()->put('student_name', $user->name);
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
        $request->session()->put('libid', $user->libid);
        return redirect('/rit/tpdashboard');
      } else {
        return redirect('/rit/login')->with('fail', 'Password Not matches');
      }
    } 
    
    elseif($user->type == 7) {

      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('emp_id', $user->collegeid);
        $request->session()->put('emp_name', $user->name);
        $request->session()->put('user_name', $user->name);
        return redirect('/rit/empdashboard');
      } else {
        return redirect('/rit/login')->with('fail', 'Password Not matches');
      }
    }
    else{
      return redirect('/rit/login')->with('fail','you are not member of ritee raipur');

     
    }
  }


  // student attendance
  public function attendance()
  {

  
      $s = User::where('libid', '=', session()->get('libid'))->first();
   
    $a = Attendance::where('memberid', '=', session()->get('libid'))->get();
    return view('studentdash.attendance', compact('s', 'a'));
  }


  //student fee details
  public function fees_details()
  {

   
      $s = User::where('libid', '=', session()->get('libid'))->first();
      $fees = Fees::where('collegeid', '=', session()->get('student_id'))->get();
      return view('studentdash.fees_details', compact('s', 'fees'));
   

  }



  //student invoice
  public function invoice($id)
  {

   
      $s = User::where('libid', '=', session()->get('libid'))->first();
      $fees = Fees::where('id', '=', $id)->first();
   


    return view('studentdash.invoice', compact('s', 'fees'));
  }

  //student fee payment now
  public function paynow($id)
  {


      $s = User::where('libid', '=', session()->get('libid'))->first();
      $fees = Fees::where('id', '=', $id)->first();
      return view('studentdash.paynow', compact('s', 'fees'));
   


  }

//payment done
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

    if($res){
      return redirect('/rit/studentdashboard/')->with('success','successfully paid your fees update within 24 hour.');

    }
    else{
      return redirect('/rit/studentdashboard/')->with('fail','Fail!! payment faild retry after one hour.');

    }






  }

  public function bookrequest($id, $libid)
  {
    $rbook = Books::where('id', '=', $id)->first();

$bs= Rbooks::where('userid','=',$libid)->where('bookid','=',$rbook->bookid)->first();
if($bs){
  return redirect('/rit/studentdashboard/book_request')->with('fail','you already requested for this book');
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
