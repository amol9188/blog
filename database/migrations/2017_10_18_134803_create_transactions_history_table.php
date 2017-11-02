<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('reference_no');
            $table->string('payment_mode');
            $table->decimal('amount_paid', 15, 2);
            $table->text('remark');
            $table->unsignedInteger('voucher_id');
            $table->unsignedInteger('voucher_redeem_history_id');
            $table->string('status');
            $table->string('created_by');
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
        Schema::dropIfExists('transactions_history');
    }
}
