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
    public function create(Request $request){
        switch ($request->input('action')){
            case 'insertsubject':
                $request->validate([
                    'teacherID'=>'required',
                    'subjectName'=>'required',
                    'subjectYear'=>'required',

                ]);
                SubjectFile::create($request->all());
        }


    }
}
