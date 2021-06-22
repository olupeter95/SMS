<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('noticeboard_id');
            $table->integer('expense_category_id');
            $table->longtext('title');
            $table->longtext('payment_type');
            $table->integer('invoice_id');
            $table->integer('student_id');
            $table->longtext('method');
            $table->longtext('description');
            $table->longtext('amount');
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
        Schema::dropIfExists('payments');
    }
}
