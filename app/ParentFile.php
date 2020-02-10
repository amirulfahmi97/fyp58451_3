<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentFile extends Model
{
    protected $table = 'parent_files';
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
