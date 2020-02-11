<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginTimestamp extends Model
{
    protected $table='login_timestamps';
    protected $fillable=[
        'user_id','last_login_time','last_login_ip','login_count'];

    public function users_file(){
        return $this->hasOne('App\Users_File');
    }


}
