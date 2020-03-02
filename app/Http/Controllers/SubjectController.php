<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SubjectFile;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_teacher');
    }

    public function index(){
        //
    }



}
