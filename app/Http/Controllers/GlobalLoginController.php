<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class GlobalLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showloginform(){
        return view('global.globalloginform');
    }


    public function username()
    {
        return 'username';
    }
    public function loginform(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('username' => $input['username'], 'password' => $input['password']))) {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admindashboard');
            } elseif(auth()->user()->is_teacher == 1) {
                return redirect()->route('teacherdashboard');
            }elseif (auth()->user()->is_parent == 1){
                return redirect()->route('parentdashboard');
            }
        } else {
            return redirect()->route('globalloginform')
                ->with('messsage', 'Email-Address And Password Are Wrong.');
        }
    }
    public function globallogout(Request $request ) {
    $request->session()->flush();
    Auth::logout();
    return Redirect('userlogin');
    }

}
