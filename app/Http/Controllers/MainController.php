<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_students;
use App\Models\tbl_requests;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function login()
    {
        return view('login');
    }
    function check(Request $request)
    {
        //Validate requests
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        $userInfo = tbl_students::where('stud_email', '=', $request->email)->first();

        if (!$userInfo) {
            return back()->with('fail', 'We do not recognize your email address');
        } else {
            //check password
            if (Hash::check($request->password, $userInfo->stud_password)) {
                $request->session()->put('LoggedUser', $userInfo->stud_id);
                return redirect('STC/student');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
    function save(Request $request)
    {

        //Validate requests
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        //Insert data into database
        $student = new tbl_students;
        $fname = $request->f_name;
        $lname = $request->l_name;
        $stud_name = $fname . " " . $lname;
        $is_enrolled = "waiting";

        $student->stud_name = $stud_name;
        $student->stud_email = $request->email;
        $student->stud_enrol_status = $is_enrolled;
        $student->stud_password = Hash::make($request->password);
        $enroll = $student->save();

        if ($enroll) {
            return back()->with('success', 'New User has been successfuly added to database');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
    
}


