<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminAddUserRequest;
use App\Users_File;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function index(){
        return view('admin.dashboard');

    }
    public function showuser(){
    return 'hello';
   // $task = request()->user()->tasks;
    //return response()->json([
    //    'tasks'=>$task,
   // ],200);
    }
    public function create(){
        return view('admin.add-user');
    }

    public function store(AdminAddUserRequest $request){



        $validated = $request->validated();
        // Handle File Upload
        if($request->hasFile('user_dp')) {
            // Get filename with extension
            $filenameWithExt = $request->file('user_dp')->getClientOriginalName();
            echo $filenameWithExt;
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            echo $filename;
            // Get just ext
            $extension = $request->file('user_dp')->getClientOriginalExtension();
            echo $extension;
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            echo $fileNameToStore;
            // Upload Image
            $path = $request->file('user_dp')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        $post = new Users_File;
        $address = $request->input('address').$request->input('address2');
        $post->user_fullname = $request->input('name');
        $post->user_address =$address;
        $post->user_nric = $request->input('nric');
        $post->user_phone = $request->input('phonenumber');
        $post->user_type = $request->input('usertype');
        $post->user_age = $request->input('user_age');
        $post->user_email = $request->input('user_email');
        $post->user_dp =  $fileNameToStore;
        $post->save();
        session()->flash('message', 'Successfull add new user to the system');
        return redirect('/admin/create');

    }
    public function show($id){

    }
    public function controluser(){

        $userfile=Users_File::all();
        //$logininfo=UserLoginInfoModel::all();
        //$logininfo=UserLoginInfoModel::all();

        //$logininfo=array_merge($mergeinfo,$userfile);
        return view('admin.control-user',compact('userfile'));


    }
    public function edit($id)
    {
        $userfile = Users_File::find($id);
        return view('admin.update-users',compact('userfile'));
    }
    public function update(Request $request, $id)
    {

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
            'user_nric'=>$request->nric,
            'user_phone'=> $request->phonenumber,
            'user_type'=>$request->usertype,
            'user_email'=>$request->user_email,
        ];
        Users_File::where('id',$id)->update($update);





        return back()->with('success', 'Record updated successfully');


    }
    public function destroy($id)
    {
        $userfile=Users_File::findOrFail($id);
        $userfile->delete();
        return redirect()->action('AdminController@controluser')->with('success','Successfull delete the user');
        //return view('pages.admin.control-user')->with('success','Successfull delete the user');
        //return route('admin.controluser')->with('success','Successfull delete the user');
    }

}
