<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeworkFile extends Model
{



public function homeworkofSubject(){
    return $this->belongsToMany('App\SubjectHomework');
}

}
