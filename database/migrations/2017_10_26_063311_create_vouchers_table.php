<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger('activity_id');
            $table->string('voucher_no');
            $table->date('voucher_startdate');
            $table->date('voucher_enddate');
            $table->decimal('voucher_amount', 15, 2); 
            $table->string('voucher_type');
            $table->string('voucher_code');
            $table->string('status');
            $table->decimal('min_value', 15, 2);
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
        Schema::dropIfExists('vouchers');
    }
}
