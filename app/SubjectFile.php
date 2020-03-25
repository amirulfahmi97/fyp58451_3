<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class SubjectFile extends Model
{
    protected $table ='subject_files';
    protected $fillable = ['teacherID','subjectCode','subjectName','subjectYear'];



    public function teacherfile(){
        return $this->hasOne('App\TeacherFile');

    }
    public function homeworkfiles(){
        return $this->hasOne('App\HomeworkFile');
    }
}
