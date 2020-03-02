<?php

namespace App\Http\Controllers;

use App\TeacherFile;
use App\TeacherFile2;
use App\User;
use App\Users_File;
use App\SubjectFile;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Users;


class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        return view('teacher.dashboard');
    }
    public function profile($user_id){
        //$user_id = Crypt::decrypt($user_id);
        $userfile= TeacherFile::where('user_id',$user_id)->first();
        $username= User::where('login_userid',$user_id)->first();
        $listsubject = SubjectFile::all();

        return view('teacher.manageprofile')->with(compact('userfile','username','listsubject'));
    }

    public function updateprofile(Request $request,$user_id){

        if($request->has('manageprofile')){
            $request->validate([
                'name' => 'required',
                //   'age' => 'required',
                'address' => 'required',

            ]);
            $update = [
                // 'user_dp'=> $fileNameToStore,
                'user_fullname' => $request->name,
                // 'user_age' => $request->age,
                'user_address'=>$request->address,
                //'user_nric'=>$request->nric,
                'user_phone'=> $request->phonenumber,
                // 'user_type'=>$request->usertype,
                'user_email'=>$request->user_email,
            ];
            $update2=['name'=>$request->name,];
            // $post = TeacherFile::find($user_id);
            //$post->update($update);
            TeacherFile::where('user_id',$user_id)->update($update);
            Users_File::where('id',$user_id)->update($update);
            User::where('login_userid',$user_id)->update($update2);
            return back()->with('success', 'Record updated successfully');


        }
        elseif ($request->has('updateusername')){
            $request->validate([
                'username'=>'required|unique:users'
            ]);
            $post=['username'=>$request->username];
            User::where('login_userid',$user_id)->update($post);
            return back()->with('success', 'Record updated successfully');

        }
        elseif ($request->has('insertsubject')){
            echo "test";
            $result = DB::table('teacher_files')->select('id')->where('user_id',$user_id)->first();
            echo $teacherid = $result->id;
            $request->validate([
                'teacherID'=>'required',
                'subjectName'=>'required',
                'subjectYear'=>'required',
                'subjectCode'=>'required|unique:subject_files',

            ]);
            $post = new SubjectFile;
            $post->teacherID = $teacherid;
            $post->subjectName =$request->input('subjectName');
            $post->subjectYear = $request->input('subjectYear');
            $post->subjectCode =$request->input('subjectCode');
            $post->save();
            //$post->homeworkfiles()->attach($teacherid);
            return back()->with('success', 'succesfull update');

        }

    }

    public function updateusername(Request $request,$user_id){
        $post = User::findOrFail($user_id);
        $post->username = $request->newusername;
        $post->save();

        return back()->with('success','Succesfull update the username');
    }

}
