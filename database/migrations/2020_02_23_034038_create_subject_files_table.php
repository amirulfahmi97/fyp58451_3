<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('teacherID')->unsigned();
            $table->string('subjectName');
            $table->string('subjectYear');
            $table->timestamps();

//not yet migrate, continue tomorrow
            //wait for the homework table
            $table->foreign('teacherID')->references('id')->on('teacher_files')

                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_files');
    }
}
