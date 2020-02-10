<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_File extends Model
{
    protected $table = 'users_files';
    protected $fillable =[
        //'user_id',
        'user_email',
        'user_fullname',
        'address',
        'user_nric',
        'user_phone',
        'user_type',
        'user_age',
        'user_dp',
    ];
    public function user_login_info()
    {
        return $this->hasOne('App\User');
    }
    public function teacherFile()
    {
        return $this->hasOne('App\TeacherFile');
    }
    public function ParentsFile()
    {
        return $this->hasOne('App\ParentFile');
    }
    public function adminfile()
    {
        return $this->hasOne('App\Admin');
    }
    public function usersfile()
    {
        return $this->hasOne('App\User');
    }
}
