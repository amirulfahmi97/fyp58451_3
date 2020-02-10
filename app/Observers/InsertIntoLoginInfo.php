<?php

namespace App\Observers;

use App\TeacherFile;
use App\User;
use App\Users_File;

class InsertIntoLoginInfo
{
    /**
     * Handle the users_ file "created" event.
     *
     * @param  \App\Users_File  $usertype
     * @return void
     */
    public function created(Users_File $usertype)
    {
        if ($usertype->user_type == 'admin') {
               $is_admin=1;
               $is_parent=0;
               $is_teacher=0;
            //
            $password = bcrypt('123456');
               $post = new User;
               $post->login_userid = $usertype->id;
               $post->name = $usertype->user_fullname;
               $post->password =$password;
               $post->username = $usertype->user_phone;
               $post->is_admin = $is_admin;
            //   $post->user_age = $usertype->user_age;
            //   $post->user_dp = $usertype->user_dp;
            //   $post->user_phoneno=$usertype->user_phone;
            //   $post->user_address= $usertype->address;
            //   //$post->
              $post->save();
        }
        if ($usertype->user_type == 'teacher') {
            //$is_admin=1;
           // $is_parent=0;
            //$is_teacher=0;
            //
            $password = bcrypt('123456');
            $post = new User;
            $post->login_userid = $usertype->id;
            $post->name = $usertype->user_fullname;
            $post->password =$password;
            $post->username = $usertype->user_phone;
            $post->is_teacher = 1;
            //   $post->user_age = $usertype->user_age;
            //   $post->user_dp = $usertype->user_dp;
            //   $post->user_phoneno=$usertype->user_phone;
            //   $post->user_address= $usertype->address;
            //   //$post->
            $post->save();
        }
    }

    /**
     * Handle the users_ file "updated" event.
     *
     * @param  \App\Users_File  $usersFile
     * @return void
     */
    public function updated(Users_File $usersFile)
    {
        //
    }

    /**
     * Handle the users_ file "deleted" event.
     *
     * @param  \App\Users_File  $usersFile
     * @return void
     */
    public function deleted(Users_File $usersFile)
    {
        //
    }

    /**
     * Handle the users_ file "restored" event.
     *
     * @param  \App\Users_File  $usersFile
     * @return void
     */
    public function restored(Users_File $usersFile)
    {
        //
    }

    /**
     * Handle the users_ file "force deleted" event.
     *
     * @param  \App\Users_File  $usersFile
     * @return void
     */
    public function forceDeleted(Users_File $usersFile)
    {
        //
    }
}
