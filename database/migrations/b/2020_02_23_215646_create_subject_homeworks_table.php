<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_homeworks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('homeworkID')->unsigned();
            $table->bigInteger('subjectID')->unsigned();
            $table->timestamps();

            $table->foreign('homeworkID')->references('id')->on('homework_files')->onDelete('cascade');
            $table->foreign('subjectID')->references('id')->on('subject_files')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_homeworks');
    }
}
