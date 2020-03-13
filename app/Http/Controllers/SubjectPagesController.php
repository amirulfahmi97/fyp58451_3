<?php

namespace App\Http\Controllers;

use App\SubjectFile;
use App\TeacherFile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SubjectPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id,$subjectcode){
        //$userfile= TeacherFile::where('user_id',$user_id)->first();
        //$username= User::where('login_userid',$user_id)->first();
         $id = Crypt::decrypt($id);
         //echo $id;
       // echo $subjectcode;

        $subject = new SubjectFile();
        $users = SubjectFile::where('teacherID',$id)->first();
        //echo $users->subjectCode;
        return view('teacher.subject.index')->with(compact('users'));
    }
}
