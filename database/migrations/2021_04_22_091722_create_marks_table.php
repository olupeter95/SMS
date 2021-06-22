<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->bigIncrements('mark_id');
            $table->bigInteger('student_id');
            $table->bigInteger('class_id');
            $table->bigInteger('subject_id');
            $table->bigInteger('exam_id');
            $table->bigInteger('mark_obtained');
            $table->bigInteger('mark_total');
            $table->string('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
