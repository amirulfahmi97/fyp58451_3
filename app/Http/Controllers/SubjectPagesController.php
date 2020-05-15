<?php

namespace App\Http\Controllers;

use App\HomeworkFile;
use App\SubjectFile;
use App\TeacherFile;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

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
        //   echo "<br> ".$id;
        //echo "<br>".$subjectcode;
        //echo "<br>";


        $subject = new SubjectFile();
        $users = SubjectFile::where('subjectCode',$subjectcode)->first();
        //echo "Subject Code :".$users->subjectCode;
        // echo "<br>Subject ID :".$users->id . "With ID: ";
        $subjectid = $users->id;

        $homework = HomeworkFile::where('subjectid',$users->id)->get();
        $homework2 = DB::table('homework_files')->where('subjectid',$subjectid)->get();
        $hw = HomeworkFile::all();
        $hwork = $homework->toArray();

        if($homework2){
            return view('teacher.subject.index')->with(compact('users','homework','hw','hwork'));
        }
        else{
            //$homework == null;
            echo "noting in here";
            return view('teacher.subject.backup.index')->with(compact('users','homework','hw'));


        }

        // echo $homework->id;
       // $newdate =  $homework->dateline;
        // echo "<br>".date('F',strtotime($newdate));
        //echo "<br>";
      //  $month = date('F',strtotime($newdate));
        //echo $result = Carbon::parse($homework->dateline)->format('d/m/Y');


        //  return view('teacher.subject.2020calendar')->with(compact('users','month','homework'));


    }

    public function savehomework(){
         function testing (){

        }
        //
    }
}