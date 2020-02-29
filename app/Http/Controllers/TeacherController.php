<?php

namespace App\Http\Controllers;

use App\TeacherFile;
use App\TeacherFile2;
use App\User;
use App\Users_File;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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
        return view('teacher.manageprofile')->with(compact('userfile','username'));
    }

    public function updateprofile(Request $request,$user_id){
    echo "test";
    echo $user_id;
    echo $request->name;
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

    public function updateusername(Request $request,$user_id){
            $post = User::findOrFail($user_id);
            $post->username = $request->newusername;
            $post->save();

        return back()->with('success','Succesfull update the username');
    }

}
