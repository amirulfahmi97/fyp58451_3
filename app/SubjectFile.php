<?php


use Illuminate\Database\Eloquent\Model;

class SubjectFile extends Model
{
    protected $fillable = ['teacherID','subjectName','subjectYear'];



    public function teacherfile(){
        return $this->hasOne('App\TeacherFile');

    }
    public function homworkOfSubject(){
        return $this->belongsToMany('App\SubjectHomework');
    }
}
