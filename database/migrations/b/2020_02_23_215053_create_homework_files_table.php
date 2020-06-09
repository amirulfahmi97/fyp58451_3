<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeworkFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homework_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('subjectid');
            $table->string('homeworkType');
            $table->string('homeworkDesc');
            $table->time('dateline');
            $table->string('new_date')->nullable();
            $table->string('fileDir')->nullable();
            $table->timestamps();
            $table->foreign('subjectid')->references('id')->on('subject_files')

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
        Schema::dropIfExists('homework_files');
    }
}
