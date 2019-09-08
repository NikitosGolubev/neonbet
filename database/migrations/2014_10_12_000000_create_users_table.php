<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nickname', 50)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('fullname');
            $table->dateTime('birthdate');
            $table->string('userpick')->default('storage/defaults/user-avatar.jpg');
            $table->float('balance')->unsigned()->default(0);
            $table->timestamp('banned_at')->nullable();
            $table->timestamp('verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
