<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevokeHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revoke_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('activity_id');
            $table->decimal('amount_revoked', 15, 2);
            $table->text('remark');
            $table->string('revoked_by');
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
        Schema::dropIfExists('revoke_history');
    }
}
