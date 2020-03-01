<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeworkFile extends Model
{



public function subjectfiles(){
    return $this->belongsToMany('App\SubjectFile');
}

}
