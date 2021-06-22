<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountants', function (Blueprint $table) {
            $table->bigIncrements('accountant_id');
            $table->string('name');
            $table->string('birthday');
            $table->string('sex');
            $table->string('religion');
            $table->string('blood_group');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->string('authenticate_key');
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
        Schema::dropIfExists('accountants');
    }
}
