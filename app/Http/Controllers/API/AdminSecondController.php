<?php

namespace App\Http\Controllers\API;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Users_File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminSecondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json([
            'error'=>false,
            'users'=>Admin::all(),
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'name' => 'required',
            //'age' => 'required',
            'address' => 'required',
            'user_dp'=> 'required|image|max:1999',
            'user_email'=>'required',

        ]);
        if($validation->fails()){
            return response()->json([
                'error'=>true,
                'messages'=>$validation->errors(),
            ]);
        }
        else{

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
            $post->user_fullname = $request->input('name');
            $post->user_address = $request->input('address');
            $post->user_nric = $request->input('nric');
            $post->user_phone = $request->input('phonenumber');
            $post->user_type = $request->input('usertype');
            $post->user_age = $request->input('user_age');
            $post->user_email = $request->input('user_email');
            $post->user_dp =  $fileNameToStore;
            $post->save();
            return response()->json([
                'error'=>false,
                'users'=>$post,
            ],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $post = Users_File::find($id);
        if(is_null($post)){
            return response()->json([
                'error'=>true,
                'message'=>"doesnt exists",
            ],404);
        }

        $post->delete();
        return response()->json([
            'error' => false,
            'message'  => "Customer record successfully deleted id # $id",
        ], 200);    }
}
