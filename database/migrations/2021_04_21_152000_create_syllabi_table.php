<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyllabiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syllabi', function (Blueprint $table) {
            $table->id();
            $table->longtext('academic_syllabus_code');
            $table->longtext('title');
            $table->longtext('description');
            $table->bigInteger('class_id');
            $table->bigInteger('subject_id');
            $table->longtext('uploader_type');
            $table->longtext('uploader_id');
            $table->longtext('session');
            $table->timestamps();
            $table->longtext('filename');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syllabi');
    }
}
