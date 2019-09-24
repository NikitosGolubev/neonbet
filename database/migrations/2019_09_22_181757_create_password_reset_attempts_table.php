<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetAttemptsTable extends Migration
{
    public function up()
    {
        Schema::create('password_reset_attempts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('record_id');
            $table->unsignedBigInteger('ip_id');
            $table->timestamp('expires_at');
            $table->timestamp('attempted_at')->useCurrent();

            $table->foreign('record_id')->references('id')->on('password_reset_records')->onDelete('cascade');
            $table->foreign('ip_id')->references('id')->on('collected_ips')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('password_reset_attempts');
    }
}
