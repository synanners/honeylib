<?php
/**
 * Created by PhpStorm.
 * User: Syd de Ama
 * Date: 04/03/2018
 * Time: 8:33 AM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use Validator;
use Response;

class MainController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        return redirect();
    }

}