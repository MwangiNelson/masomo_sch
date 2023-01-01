<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_students;
use App\Models\tbl_staff;
use App\Models\tbl_unit;
use App\Models\tbl_notices;
use App\Models\tbl_cworks;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register_units()
    {
        $unit = tbl_unit::all();
        $data = ['LoggedUserInfo' => tbl_students::where('stud_id', '=', session('student_id'))->first()];
        return view('/STC/unit_reg', $data, compact('unit'));
    }
    function check(Request $request)
    {
        //Validate requests
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        $studentInfo = tbl_students::where('stud_email', '=', $request->email)->first();

        if (!$studentInfo) {
            $staffInfo = tbl_staff::where('staff_email', '=', $request->email)->first();
            if ($staffInfo) {
                if (Hash::check($request->password, $staffInfo->staff_password)) {
                    $request->session()->put('staff_id', $staffInfo->staff_id);
                    $s_role = $staffInfo->staff_role;
                    if ($s_role === 1) {
                        return redirect('/admin');
                    } else {
                        return redirect('/teacher');
                    }
                } else {
                    return back()->with('fail', 'Incorrect password');
                }
            } else {
                return back()->with('fail', 'We do not recognize your email address');
            }
        } else {
            //check password
            if (Hash::check($request->password, $studentInfo->stud_password)) {
                $request->session()->put('student_id', $studentInfo->stud_id);
                return redirect('/student');
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
    function add_staff(Request $request)
    {

        //Validate requests
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        //Insert data into database
        $staff = new tbl_staff();
        $fname = $request->f_name;
        $lname = $request->l_name;
        $stud_name = $fname . " " . $lname;
        $role_id = 1;

        $staff->staff_name = $stud_name;
        $staff->staff_email = $request->email;
        $staff->staff_role = $role_id;
        $staff->staff_password = Hash::make($request->password);
        $enroll = $staff->save();

        if ($enroll) {
            return back()->with('success', 'New User has been successfuly added to database');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
    function students()
    {
        $unit_data = tbl_unit::all();
        $data = ['LoggedUserInfo' => tbl_students::where('stud_id', '=', session('student_id'))->first()];
        return view('/students/student', $data, compact('unit_data'));
    }
    function admin()
    {
        $student_data = tbl_students::all();
        $staff_data = tbl_staff::all();
        $unit_data = tbl_unit::all();
        // $data = ['LoggedUserInfo' => tbl_staff::where('staff_id', '=', session('staff_id'))->first()];
        return view('/admin/admin', compact('student_data', 'unit_data', 'staff_data'));
    }
    function lec()
    {
        $cwork = tbl_cworks::all();
        $staff_data = tbl_staff::all();
        $notices = tbl_notices::all();
        $unit_data = tbl_unit::all();
        $my_units = tbl_unit::where('unit_lecturer', '=', session('staff_id'))->first();
        $data = ['LoggedUserInfo' => tbl_staff::where('staff_id', '=', session('staff_id'))->first()];
        return view('/TC/teacher', $data, compact('notices', 'unit_data', 'staff_data', 'cwork', 'my_units'));
    }
    function logout()
    {
        session()->flush();
        return redirect('/');
    }
    function delete_student($id)
    {
        $deletion = tbl_students::where('stud_id', $id)->delete();
        if ($deletion) {
            return back()->with('success', 'Student has been deleted successfully');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
    function delete_unit($id)
    {
        $deletion = tbl_unit::where('id', $id)->delete();
        if ($deletion) {
            return back()->with('success', 'Selected unit was been deleted successfully');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
    function delete_staff($id)
    {
        $deletion = tbl_staff::where('staff_id', $id)->delete();
        if ($deletion) {
            return back()->with('success', 'Selected staff was been deleted successfully');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
    function edit($id)
    {
        $data = ['LoggedUserInfo' => tbl_staff::where('staff_id', '=', session('staff_id'))->first()];
        $student = tbl_students::where('stud_id', $id)->first();
        return view('/HR/editor', $data, compact('student'));
    }
    function update_student(Request $request, $id)
    {
        $new_name = $request->new_name;
        $new_email = $request->new_email;
        $new_status = $request->new_status;
        $update = tbl_students::where('stud_id', $id)->update(array('stud_name' => $new_name, 'stud_email' => $new_email, 'stud_enrol_status' => $new_status));
        if ($update) {
            return back()->with('success', 'New User has been successfuly added to database');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
    function add_unit(Request $request)
    {

        $unit = new tbl_unit;
        $unit->unit_name = $request->unit_name;
        $unit->unit_code = $request->unit_code;
        $unit->unit_desc = $request->unit_desc;
        $unit->unit_lecturer = $request->unit_lec;
        $unit->unit_chapters = $request->unit_chapters;
        $new_unit = $unit->save();
        if ($new_unit) {
            return back()->with('success', 'New Unit has been successfuly added to database');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
    function notices()
    {
        $notices = tbl_notices::all();
        return view('/STC/notices',  compact('notices'));
    }
    function notices_teacher()
    {
        $notices = tbl_notices::all();
        return view('/TC/notices', compact('notices'));
    }
    function add_notice(Request $request)
    {
        $notice = new tbl_notices;
        $notice->notice_header = $request->notice_header;
        $notice->notice_desc = $request->notice_desc;
        $lec_details = tbl_staff::where('staff_id', '=', session('staff_id'))->first();
        $notice->posted_by = $lec_details->staff_name;
        $new_notice = $notice->save();
        if ($new_notice) {
            return back()->with('success', 'New Notice has been successfuly posted.');
        } else {
            return back()->with('fail', 'Notice has been failed terribly.');
        }
    }
    function add_cwork(Request $request)
    {

        $cwork = new tbl_cworks;
        $cwork->cwork_head = $request->cwork_head;
        $cwork->cwork_desc = $request->cwork_desc;
        $cwork->posted_by = $request->cwork_lec;
        $cwork->cwork_unit = $request->cwork_unit;
        $new_cwork = $cwork->save();
        if ($new_cwork) {
            return back()->with('success', 'New work has been successfuly added to database');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
}
