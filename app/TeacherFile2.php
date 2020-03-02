<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherFile2 extends Model
{
    protected $table = 'teacher_files2';
    protected $fillable =[
        'user_id',
        'user_fullname',
        'user_address',
        'user_nric',
        'user_phoneno',
        'user_age',
        'user_dp',
    ];

    public function users_file(){
        return $this->hasOne('App\Users_File');
    }
}
