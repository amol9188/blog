<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherRedeemHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_redeem_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('voucher_id');
            $table->date('redeem_date');
            $table->decimal('redeem_amount', 15, 2);
            $table->string('invoice_no');
            $table->string('confirmation_code');
            $table->string('redeemed_by');
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
        Schema::dropIfExists('voucher_redeem_history');
    }
}
