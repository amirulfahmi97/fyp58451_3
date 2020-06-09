<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeworkFile extends Model
{
    protected $table = 'homework_files';
    protected $fillable = ['subjectid','homeworkType','homeworkDesc','duedate_date','duedate_time','new_date','fileDir','submission'];


public function subjectfile(){
    return $this->hasOne('App\SubjectFile');
}

}
