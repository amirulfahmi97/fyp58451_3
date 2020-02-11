<?php

namespace App\Http\Controllers;

use App\TeacherFile;
use App\Users_File;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        return view('teacher.dashboard');
    }
    public function profile($id){
        $userfile= Users_File::find($id);
        return view('teacher.manageprofile')->with(compact('userfile'));
    }

    public function updateprofile(Request $request,$id){

        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'user_dp'=> 'required',

        ]);
        if($request->hasFile('user_dp')) {
            // Get filename with extension
            $filenameWithExt = $request->file('user_dp')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('user_dp')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('user_dp')->    storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $update = [
            'user_dp'=> $fileNameToStore,
            'user_fullname' => $request->name,
            'user_age' => $request->age,
            'user_address'=>$request->address,
            //'user_nric'=>$request->nric,
            'user_phoneno'=> $request->phonenumber,
           // 'user_type'=>$request->usertype,
           // 'user_email'=>$request->user_email,
        ];
        TeacherFile::where('user_id',$id)->update($update);





        return back()->with('success', 'Record updated successfully');


    }
}
