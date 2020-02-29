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
        $request->validate([
            'teacherID'=>'required',
            'subjectName'=>'required',
            'subjectYear'=>'required',

        ]);
        SubjectFile::create($request->all());
        return json_encode(array("statusCode"=>200));
    }
}
