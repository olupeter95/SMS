<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('name');
            $table->string('birthday');
            $table->string('sex');
            $table->string('religion');
            $table->string('blood_group');
            $table->string('address');
            $table->bigInteger('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->tinyInteger('class_id');
            $table->tinyInteger('section_id');
            $table->tinyInteger('parent_id');
            $table->tinyInteger('transport_id');
            $table->tinyInteger('hostel_id');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('students');
    }
}