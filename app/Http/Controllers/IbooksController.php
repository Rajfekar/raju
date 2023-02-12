<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Ibooks;
use App\Models\Rbooks;
use App\Models\Students;
use App\Models\User;
use Hash;

class IbooksController extends Controller
{
    //



    public function issuebooknow($id, $libid)
    {
        $member = Students::where('id', '=', $id)->first();
        $ibn2 = Students::where('libid', '=', $libid)->first();
        if ($member == $ibn2) {
            $booksr = Books::where('available','=','Yes')->get();

            $books = Books::where('available', '=', 'Yes')->get();
            return view('issuebooknow', compact('member', 'books','booksr'));
        }



        return redirect('/rit/libdashboard');
    }


  

   
}
