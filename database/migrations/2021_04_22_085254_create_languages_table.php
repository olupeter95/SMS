<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('phrase_id');
            $table->string('phrase');
            $table->string('english');
            $table->string('french');
            $table->string('chinese');
            $table->string('turkish');
            $table->string('dutch');
            $table->string('russian');
            $table->string('portuguese');
            $table->string('italian');
            $table->string('hindi');
            $table->string('thai');
            $table->string('japanese');
            $table->string('latin');
            $table->string('korean');
            $table->string('indonesia');
            $table->string('spanish');
            $table->string('arabic');
            $table->string('hungarian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
