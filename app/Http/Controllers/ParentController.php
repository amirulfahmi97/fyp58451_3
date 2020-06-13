<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        return view('parents.dashboard');
    }

    public function profile($user_id){

        return view ('parents.manageprofile');
    }
}
