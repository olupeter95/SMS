<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librarians', function (Blueprint $table) {
            $table->bigIncrements('librarian_id');
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('librarians');
    }
}
