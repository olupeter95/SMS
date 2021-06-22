<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_managers', function (Blueprint $table) {
            $table->bigIncrements('task_manager_id');
            $table->string('name');
            $table->longtext('description');
            $table->string('priority');
            $table->string('date');
            $table->string('user');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_managers');
    }
}
