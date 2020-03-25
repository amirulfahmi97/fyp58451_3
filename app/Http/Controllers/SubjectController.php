<?php

namespace App\Http\Controllers;

use App\HomeworkFile;
use Illuminate\Http\Request;
use SubjectFile;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_teacher');
        $this->middleware('auth');
    }

    public function index(){
        //testtesttest
    }

    public function insertHomework(Request $request,$id){
        echo "something something";
        echo $id;
        echo $request->subjectid;
        echo "dd";
        echo "subjectID:".$subjectid = $request->subjectid;
        echo "<br>";
        echo "ID ".$id;
        echo "<br> Type ".$request->type;
        echo "<br> Description ".$request->description;
        echo "<br> Submission  ".$request->submission;
        echo "<br> Due Dates  ".$request->dateline;
        echo "<br> Times ".$request->time;
        echo "<br> ". $request->input('type');

        $request->validate([
            'subjectid'=>'required',
            'type'=>'required',
            'description'=>'required',
            'submission'=>'required',
            'dateline'=>'required'
        ]);
        echo "dd";
        echo "subjectID:".$subjectid = $request->subjectid;
        echo "<br>";
        echo "ID ".$id;
        echo "<br> Type ".$request->type;
        echo "<br> Description ".$request->description;
        echo "<br> Submission  ".$request->submission;
        echo "<br> Due Dates  ".$request->dateline;
        echo "<br> Times ".$request->time;

        $post = new HomeworkFile;
        $post->subjectid= $request->id;
        $post->homeworkType =$request->type;
        $post->homeworkDesc= $request->description;
        $post->duedate_date= $request->dateline;
        $post->duedate_time=$request->time;
        $post->submission= $request->submission;
        $post->save();
        return back()->with('message','Adding Success!');



    }



}
