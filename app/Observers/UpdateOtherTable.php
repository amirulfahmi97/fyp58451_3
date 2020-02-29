<?php

namespace App\Observers;

use App\TeacherFile;
use App\Users_File;

class UpdateOtherTable
{
    public function updated(TeacherFile $userfile)
    {
       echo $userfile;
      echo  $user_id = $userfile->user_id;
        $update = [
            // 'user_dp'=> $fileNameToStore,
            'user_fullname' => $userfile->user_fullname,
            // 'user_age' => $request->age,
            'user_address'=>$userfile->address,
            //'user_nric'=>$request->nric,
            'user_phoneno'=> $userfile->phonenumber,
            // 'user_type'=>$request->usertype,
            'user_email'=>$userfile->user_email,
        ];
     //   Users_File::where('user_id',$user_id)->update($update);
    }
}
