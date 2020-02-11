<?php

namespace App\Listeners;

use App\LoginTimestamp;
use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use function Sodium\increment;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $logintime = $time_stamps = Carbon::now();
        echo "</br>";
        //echo $userID = $event->user->user_id;
        echo "</br>";
        $loginip = $this->request->ip();
        echo '</br>';
        $id = $event->user->login_userid;
        $post = new LoginTimestamp;

        $user = DB::table('login_timestamps')->where('user_id',$id)->value('user_id');
        echo $user;
        //$post->increment('login_count');
        //$post->user_id = $id;
        //$post->last_login_time = $logintime;
        //$post->last_login_ip = $loginip;
        //  $post->save();
        $post1 = new LoginTimestamp;
        echo $post1->last_login_ip;
        echo "</br>";
        echo $event->user->name;
        echo "</br>";
        echo $id;
        if($user == $event->user->login_userid){
            echo ' yes it same';
            DB::table('login_timestamps')
                ->where('user_id',$user)
                ->increment('login_count');
        }
        else{

            DB::table('login_timestamps')->Insert([
       'user_id' => $id,
       'login_count' => 1,
      'last_login_time'=>$logintime,
       'last_login_ip'=>$loginip]);
        }
//ost->user_id == $event->user->login_userid)
//
///            increment(happen)
//
//B::table('login_timestamps')
//->increment('login_count',1,['user_id'=>$id]);
//cho"increment happen";
//
//
//lse{
//
//
//
//
//        DB::table('login_timestamps')
        //      ->increment('login_count',1,['user_id'=>$id]);  }
    }
}
