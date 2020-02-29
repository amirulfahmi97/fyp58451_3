<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherFile extends Model
{
    protected $table = 'teacher_files';
    protected $fillable =[
        'user_id',
        'user_fullname',
        'user_address',
        'user_nric',
        'user_phone',
        'user_age',
        'user_dp',
    ];


    public function users_file(){
        return $this->hasOne('App\Users_File');
    }
    public function subjectFIle(){
        //return $this->hasOne()
    }
}
