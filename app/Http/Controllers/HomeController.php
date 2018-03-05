<?php

namespace App\Http\Controllers;

use App\Student;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Library\ClassFactory as CF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('home')->with('students',$students);
    }

    public function reports(){
        $reports = Reservation::all();
        return view('report')->with('reports', $reports);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function show($id)
    {
        $json = json_encode(CF::model('Student')->all());
        return $json;
    }
}
