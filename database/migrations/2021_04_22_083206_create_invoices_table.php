<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('invoice_id');
            $table->bigInteger('student_id');
            $table->string('title');
            $table->string('description');
            $table->bigInteger('amount');
            $table->bigInteger('amount_paid');
            $table->bigInteger('due');
            $table->bigInteger('creation_timestamp');
            $table->longtext('payment_timestamp');
            $table->string('payment_method');
            $table->string('payment_details');
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
        Schema::dropIfExists('invoices');
    }
}
