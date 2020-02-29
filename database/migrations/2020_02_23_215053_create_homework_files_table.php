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
            $table->string('homeworkType');
            $table->string('homeworkDesc');
            $table->time('dateline');
            $table->string('new_date')->nullable();
            $table->string('fileDir')->nullable();
            $table->timestamps();
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
