<?php
// hello priyanshu
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use GuzzleHttp\Client;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Ibooks;
use App\Models\Rbooks;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Carbon\CarbonPeriod;
/*
|--------------------------------------------------------------------------
| Indexing - All functions list  of library admin  dashboard
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


class LibraryController extends Controller
{

  public function index()
  {
    date_default_timezone_set('Asia/Kolkata');
    $u = User::all()->count();
    $a = Attendance::all()->count();
    $b = Books::all()->count();
    $i = Ibooks::all()->count();
    $currentMonth = Carbon::now()->month;
    $currentYear = Carbon::now()->year;
    $daysInCurrentMonth = Carbon::createFromDate($currentYear, $currentMonth)->daysInMonth;
    $daysInPreviousMonth = Carbon::parse('last month')->daysInMonth;
    $startDate = new Carbon('first day of last month');
    $endDate = new Carbon('last day of last month');
    $currentDate = $startDate;

    while ($currentDate <= $endDate) {
      $p_arr[] = $currentDate->format('d-m-Y');
      $p_arr2[] = $currentDate->format('d-m-Y');
      $currentDate->addDay();
    }

    foreach ($p_arr as $key => $value) {
      $t = Attendance::where('demo1', '=', $value)->count();
      $p_month[$key] = $t;
    }
    foreach ($p_arr2 as $key => $value) {
      $t2 = Ibooks::where('idate', 'like', $value)->count();
      $p_month2[$key] = $t2;
    }

    $startDate = Carbon::now()->startOfMonth();
    $endDate = Carbon::now()->endOfMonth();
    $currentDate = $startDate;
    while ($currentDate <= $endDate) {
      $c_arr[] = $currentDate->format('d-m-Y');
      $c_arr2[] = $currentDate->format('d-m-Y');
      $currentDate->addDay();
    }
    foreach ($c_arr as $key => $value) {
      $t = Attendance::where('demo1', '=', $value)->count();
      $c_month[$key] = $t;
    }
    foreach ($c_arr2 as $key => $value) {
      $t2 = Ibooks::where('idate', 'like', $value)->count();
      $c_month2[$key] = $t2;
    }
    // print_r($p_month);
    // print_r($c_month);
    // die;
    return view('libdash.dash', compact('u', 'b', 'a', 'i', 'p_month', 'c_month', 'p_month2', 'c_month2'));
  }

  // 2.  issue book 
  public function issuebook()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();
    $booksr = Books::where('available', '=', 'Yes')->get();
    $member = User::all();
    return view('libdash.issue_book', compact('s', 'booksr', 'member'));
  }



  //change password
  public function change_pass()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();

    return view('libdash.change_pass', compact('s'));
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





  // user profile
  public function user_profile()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();
    return view('libdash.user_profile', compact('s'));
  }



  //qr_code 
  public function qr_code()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();
    return view('libdash.qr_code', compact('s'));
  }


  //ct_marks
  public function ct_marks()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();


    return view('libdash.ct_marks', compact('s'));
  }

  //issued_books
  public function issued_books()
  {
    date_default_timezone_set('Asia/Kolkata');

    $data = array();

    $s = User::where('libid', '=', session()->get('libid'))->first();


    $issueb = Ibooks::all();
    return view('libdash.issued_books', compact('s', 'issueb'));
  }



  //book_request
  public function book_request()
  {
    $data = array();
    $s = User::where('libid', '=', session()->get('libid'))->first();
    $requestb = Rbooks::all();
    $books = Books::all();
    return view('libdash.book_request', compact('s', 'books', 'requestb'));
  }


  //book report
  public function book_report()
  {
    $data = array();
    $s = User::where('libid', '=', session()->get('libid'))->first();

    $books = Books::all();
    return view('libdash.book_report', compact('s', 'books'));
  }


  // editbook
  public function editbook($bookid)
  {

    $s = User::where('libid', '=', session()->get('libid'))->first();
    $member = Books::where('bookid', '=', $bookid)->first();
    return view('libdash.edit_book', compact('member', 's'));
  }

  // edit member
  public function editmember($collegeid)
  {

    $s = User::where('collegeid', '=', session()->get('librarian_id'))->first();
    $member = User::where('collegeid', '=', $collegeid)->first();
    return view('libdash.edit_member', compact('member', 's'));
  }

  // edit member
  public function updatemember(Request $request)
  {
    $request->validate([
      'libid' => 'required',
      'name' => 'required'

    ]);


    $member = User::where('libid', '=', $request->libid)->update([
      'name' => $request->name,
      'libid' => $request->libid,
      'branch' => $request->branch,
      'sem' => $request->sem,
      'rollno' => 0,
      'status' => 1
    ]);
    if ($member) {
      return redirect('/rit/libdashboard/memberlist')->with('success', 'successfully update user.');
    } else {
      return redirect('/rit/libdashboard/memberlist')->with('fail', 'successfully not update user.');
    }
  }

  //delete book2
  public function deletebook($bookid)
  {
    Books::where('bookid', '=', $bookid)->delete();
    return redirect('/rit/libdashboard/book_report')->with('success', 'Book Deleted Successfully.');
  }

  //attendance
  public function attendance()
  {

    $s = User::where('libid', '=', session()->get('libid'))->first();

    $a = Attendance::all();
    return view('libdash.attendance', compact('s', 'a'));
  }

  //member list
  public function memberlist()
  {


    $s = User::where('libid', '=', session()->get('libid'))->first();

    $member = User::where('type', '=', '0')->orwhere('type', '=', '1')->get();
    return view('libdash.members_list', compact('s', 'member'));
  }



  //logout
  public function log_out()
  {
    session()->flush();
    return redirect('/rit/login')->with('success', 'successfully logout');
  }



  //edit notice
  public function editnotice($id)
  {

    $s = User::where('libid', '=', session()->get('libid'))->first();
    $notice = Notification::where('id', '=', $id)->first();

    return view('editnotice', compact('notice', 's'));
  }

  //update notice
  public function updatenotice(Request $request)
  {


    $request->validate([
      'noticeid' => 'required',
      'image' => 'required',
      'subject' => 'required',
      'title' => 'required',

    ]);

    $filename = "Library" . "_" . $request->noticeid . "." . $request->file('image')->getClientOriginalExtension();
    $request->file('image')->storeAs('public/notices', $filename);
    $res = Notification::where('id', '=', $request->noticeid)->update([
      'subject' => $request->subject,
      'title' => $request->title,
      'date' => date("d-m-Y h:i A"),
      'demo1' => $filename,
    ]);

    if ($res) {
      return redirect('/rit/libdashboard')->with('success', 'Successfully Updated.');
    } else {
      return redirect('/rit/libdashboard')->with('fail', ' fail !! Updation failed.');
    }
  }

  //notice
  public function notice()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();

    $notice = Notification::all();

    return view('libdash.notice', compact('notice', 's'));
  }


  //attendance now
  public function attendancenow($libid)
  {


    $student = User::where('libid', '=', $libid)->first();
    date_default_timezone_set('Asia/Kolkata');
    $intime = date('h:i A');
    $raj = rand(10, 100);
    $today = date("d-m-Y");
    $outtime = date("h:i A", strtotime("$intime +$raj minutes"));
    $res = Attendance::insert([
      'name' => $student->name,
      'memberid' => $student->libid,
      'department' => $student->branch,
      'intime' => $intime,
      'outtime' => $outtime,
      'sem' => $student->sem,
      'demo2' => $student->image,
      'demo1' => $today
    ]);
    if ($res) {
      return redirect('/rit/libdashboard/memberlist')->with('success', 'Attendance to ' . $student->name . ' given successfully');
    } else {
      return redirect('/rit/libdashboard')->with('fail', ' fail !! Attendance not gived');
    }
  }


  //add book
  public function add_book()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();

    return view('libdash.add_book', compact('s'));
  }


  // add member
  public function add_member()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();
    return view('libdash.add_member', compact('s'));
  }



  //add member 2
  public function add_member2(Request $request)
  {
    $request->validate([
      'name' => 'required|max:30',
      'libid' => 'required|unique:users|max:10',
      'type' => 'required',
      'branch' => 'required'
    ]);
    $pass = "12345";
    $filename = "0";
    if ($request->image != NULL) {
      $filename = "raj_" . date('his') . $request->libid . "." . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('public/students', $filename);
    }
    $idvalue = User::all()->last();
    $rit = $idvalue->id + 1;
    $password = Hash::make($pass);
    $u = User::insert([
      'collegeid' => "RIT" . $rit,
      'libid' => $request->libid,
      'name' => $request->name,
      'password' => $password,
      'gender' => $request->gender,
      'image' => $filename,
      'type' => $request->type,
      'branch' => $request->branch

    ]);
    if (!$u) {
      return redirect('/rit/libdashboard')->with('fail', 'Member Not Added.');
    } else {
      return redirect('/rit/libdashboard')->with('success', 'Member Added Successfully.');
    }
  }

  //book not recieved
  public function book_not_recieved($userid)
  {
    $fine = User::where('libid', '=', $userid)->first();
    $fine = $fine->r2 + 5;
    User::where('libid', '=', $userid)->update([
      'r2' => $fine
    ]);
    return redirect('/rit/libdashboard/issued_books')->with('success', 'Successfully fined the student.');
  }


  //book recieved
  public function book_recieved($bookid, $idate, $userid)
  {


    date_default_timezone_set('Asia/Kolkata');
    $today = date("d-m-Y h:i A");
    Ibooks::where('ibookid', '=', $bookid)->where('idate', '=', $idate)->where('userid', '=', $userid)->update([
      'rdate' => $today,

    ]);
    Books::where('bookid', '=', $bookid)->update([
      'available' => 'Yes',

    ]);
    Ibooks::where('ibookid', '=', $bookid)->where('idate', '=', $idate)->where('userid', '=', $userid)->update([
      'demo1' => 'Yes',
    ]);
    return redirect('/rit/libdashboard/issued_books')->with('success', 'Successfully returned.');
  }




  //issue book 2
  public function issuebook2(Request $request)
  {

    $request->validate([
      'book' => 'required',
    ]);
    date_default_timezone_set('Asia/Kolkata');
    $book_id = $request->book;
    $student_id = $request->user;
    $member = User::where('libid', '=', $student_id)->first();
    $issuebcount = Ibooks::where('userid', '=', $member->libid)->count();
    User::where('libid', '=', $member->libid)->update([
      'r1' => $issuebcount + 1,
    ]);
    $book = Books::where('bookid', '=', $book_id)->first();
    $res = Ibooks::insert([
      'userid' => $member->libid,
      'mname' => $member->name,
      'mtype' => $member->type,
      'branch' => $member->branch,
      'ibook' => $book->name,
      'author' => $book->author,
      'ibookid' => $book->bookid,
      'idays' => $d = $request->days,
      'idate' => $today = date("d-m-Y h:i A"),
      'rdate' => strftime("%d-%m-%Y", strtotime("$today +$d day")),
      'fine' => 0
    ]);


    if ($res) {
      Books::where('bookid', '=', $book_id)->update([
        'available' => 'No',

      ]);
      Ibooks::where('ibookid', '=', $book_id)->where('idate', '=', $today)->where('userid', '=', $member->libid)->update([
        'demo1' => 'No',
      ]);
      return redirect('/rit/libdashboard/issued_books')->with('success', 'book issued successfully to ' . $member->name);
    } else {
      return redirect('/rit/libdashboard/issuebook')->with('fail', ' fail !! book not issued try again.');
    }
  }


  //qr attendance
  public function qrat()
  {

    date_default_timezone_set('Asia/Kolkata');
    $a = Attendance::orderBy('id', 'desc')->where('demo1', '=', date("d-m-Y"))->get();
    $count = Attendance::where('demo1', '=', date("d-m-Y"))->count();
    $last = Attendance::all()->last();
    $totalout = Attendance::where('outtime', '!=', '00:00 PM')->where('demo1', '=', date("d-m-Y"))->get();
    $totalout = $totalout->count();
    return view('qr', compact('a', 'count', 'last', 'totalout'));
  }


  //add book post method

  public function addbook(Request $request)
  {
    $request->validate([
      'bookid' => 'required|max:10|min:2|unique:books',
      'name' => 'required|min:2|max:100',
      'detail' => 'min:5|max:100',
      'author' => 'required|min:5|max:100',
      'publication' => 'min:5|max:100',
      'price' => 'min:1|max:10',
      'quantity' => 'max:1000'
    ]);

    if ($request->image != NULL) {
      $filename = $request->bcheck . "_" . $request->bookid . "." . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('public/books', $filename);
      $res = Books::insert([
        'name' => $request->name,
        'bookid' => $request->bookid,
        'detail' => $request->detail,
        'author' => $request->author,
        'publication' => $request->publication,
        'price' => $request->price,
        'available' => $request->available,
        'branch' => $request->bcheck,
        'image' => $filename,
        'quantity' => "1",
      ]);
      if ($res) {
        return redirect('/rit/libdashboard/')->with('success', 'book added successfully');
      } else {
        return redirect('/rit/libdashboard/')->with('fail', ' fail !! book not added');
      }
    } else {
      $res = Books::insert([

        'name' => $request->name,
        'bookid' => $request->bookid,
        'detail' => $request->detail,
        'author' => $request->author,
        'publication' => $request->publication,
        'price' => $request->price,
        'available' => $request->available,
        'branch' => $request->bcheck,
        'quantity' => "1",
      ]);
      if ($res) {
        return redirect('/rit/libdashboard/')->with('success', 'book added successfully');
      } else {
        return redirect('/rit/libdashboard/')->with('fail', ' fail !! book not added');
      }
    }
  }


  // updatebook post
  public function updatebook(Request $request)
  {
    $request->validate([
      'bookid' => 'required|max:10|min:2',
      'name' => 'required|min:2|max:50',
      'detail' => 'min:5|max:50',
      'author' => 'required|min:5|max:30',
      'publication' => 'min:5|max:30',
      'price' => 'min:1|max:10',
      'quantity' => 'max:1000',
      'bcheck' => 'required',
    ]);


    if ($request->image != NULL) {
      $filename = $request->bcheck . "_" . $request->bookid . "." . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('public/books', $filename);
      $res = Books::where('bookid', '=', $request->bookid)->update([

        'name' => $request->name,
        'bookid' => $request->bookid,
        'detail' => $request->detail,
        'author' => $request->author,
        'publication' => $request->publication,
        'price' => $request->price,
        'available' => $request->available,
        'branch' => $request->bcheck,
        'image' => $filename,
        'quantity' => "1",
      ]);
      if ($res) {
        return redirect('/rit/libdashboard/')->with('success', 'book updated successfully');
      } else {
        return redirect('/rit/libdashboard/')->with('fail', ' fail !! book not updated');
      }
    } else {
      $res = Books::where('bookid', '=', $request->bookid)->update([

        'name' => $request->name,
        'bookid' => $request->bookid,
        'detail' => $request->detail,
        'author' => $request->author,
        'publication' => $request->publication,
        'price' => $request->price,
        'available' => $request->available,
        'branch' => $request->bcheck,
        'quantity' => "1",
      ]);
      if ($res) {
        return redirect('/rit/libdashboard/')->with('success', 'book updated successfully');
      } else {
        return redirect('/rit/libdashboard/')->with('fail', ' fail !! book not updated');
      }
    }
  }




  //approve book request

  public function approve($bookid, $libid)
  {
    date_default_timezone_set('Asia/Kolkata');

    $book = Books::where('bookid', '=', $bookid)->first();
    $member = User::where('libid', '=', $libid)->first();
    $res = Ibooks::insert([
      'userid' => $member->libid,
      'mname' => $member->name,
      'mtype' => $member->type,
      'branch' => $member->branch,
      'ibook' => $book->name,
      'author' => $book->author,
      'ibookid' => $book->bookid,
      'idays' => $d = 10,
      'idate' => $today = date("d-m-Y h:i A"),
      'rdate' => strftime("%d-%m-%Y", strtotime("$today +$d day")),
      'fine' => 0
    ]);

    if ($res) {

      Books::where('bookid', '=', $bookid)->update([
        'available' => 'No',

      ]);
      Ibooks::where('ibookid', '=', $bookid)->where('idate', '=', $today)->where('userid', '=', $member->libid)->update([
        'demo1' => 'No',
      ]);

      Rbooks::where('bookid', '=', $bookid)->delete();
      return redirect('/rit/libdashboard/book_request')->with('success', 'book issued successfully');
    } else {
      return redirect('/rit/libdashboard/book_request')->with('fail', ' fail !! book not issued try again.');
    }
  }

  //reject book request

  public function reject($bookid, $libid)
  {

    Rbooks::where('bookid', '=', $bookid)->where('userid', '=', $libid)->delete();
    return redirect('/rit/libdashboard')->with('success', 'Request Rejected Successfully.');
  }

  // attendance date wise 
  public function attendancedatewise()
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();

    return view('libdash.attendanceform', compact('s'));
  }

  public function attendancedatewise2(Request $request)
  {
    $s = User::where('libid', '=', session()->get('libid'))->first();

    $request->validate([
      'date' => 'required'
    ]);
    $a = Attendance::where('demo1', '=', $request->date)->get();
    if ($a) {
      return view('libdash.attendancedatewise', compact('a', 's'));
    } else {
      return redirect('/rit/libdashboard/attendancedatewise')->with('fail', 'enter correct date...');
    }
  }
}
