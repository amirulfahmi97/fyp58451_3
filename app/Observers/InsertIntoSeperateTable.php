<?php

namespace App\Observers;

use App\Admin;
use App\ParentFile;
use App\TeacherFile;
use App\Users_File;

class InsertIntoSeperateTable
{
    /**
     * Handle the users_ file "created" event.
     *
     * @param  \App\Users_File  $usersFile
     * @return void
     */
    public function created(Users_File $usertype)
    {
        if ($usertype->user_type == 'teacher') {

            $post = new TeacherFile;
            $post->user_id = $usertype->id;
            $post->user_fullname = $usertype->user_fullname;
            $post->user_age = $usertype->user_age;
            $post->user_dp = $usertype->user_dp;
            $post->user_phone=$usertype->user_phone;
            $post->user_address= $usertype->address.$usertype->address2;
            $post->user_email= $usertype->user_email;
            //$post->
            $post->save();
        }
        if ($usertype->user_type == 'parents') {

            $post = new ParentFile;
            $post->user_id = $usertype->id;
            $post->user_fullname = $usertype->user_fullname;
            $post->user_age = $usertype->user_age;
            $post->user_dp = $usertype->user_dp;
            $post->user_phone=$usertype->user_phone;
            $post->user_address= $usertype->address;
            //$post->
            $post->save();
        }
        if ($usertype->user_type == 'admin') {

            $post = new Admin;
            $post->user_id = $usertype->id;
            $post->user_fullname = $usertype->user_fullname;
            $post->user_age = $usertype->user_age;
            $post->user_dp = $usertype->user_dp;
            $post->user_phone=$usertype->user_phone;
            $post->user_address= $usertype->address;
            //$post->
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
