<?php

namespace App\Http\Controllers;

use App\Student;
use Auth;
use DB;
use Illuminate\Http\Request;
use Validator;
use Response;

class StudentsController extends Controller
{
    public function show_by_id(Request $request)
    {
        $student = User::find($request->input('id'));
        return view('view_student_info')->with('student',$student);
    }

    public function create()
    {

        return view('create_student');
    }

    public function do_create(Request $request)
    {
        $student = new Student;

        $student->student_num = $request->input('student_num');
        $student->name = $request->input('name');
        $student->course = $request->input('course');
        $student->timein = $request->input('timein');
        $student->timeout = $request->input('timeout');
        $student->img = $request->input('img');
        $student->lastlogin = $request->input('lastlogin');
        $student->active = $request->input('active');
        $student->save();

        return redirect('home');
    }

    public function update(Request $request)
    {
        $student = User::find($request->input('id'));

        return view('update_student')->with('student',$student);

    }

//    public function do_update(Request $request)
//    {
//        DB::table('students')->where('id',$request->input('id'))->update([
//            ''
//        ])
//        $request->session()->flash('success','Biometric successfully assigned to employee.');
//
//        return redirect('manage-employees');
//    }
//
//    public function do_delete()
//    {
//
//    }
}