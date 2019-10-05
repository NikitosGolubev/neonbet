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
        $default_userpick_path = Storage::url('defaults/user-avatar.png');

        Schema::create('users', function (Blueprint $table) use ($default_userpick_path) {
            $table->bigIncrements('id');
            $table->string('nickname', 50)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('fullname');
            $table->date('birthdate');
            $table->string('userpick')->default($default_userpick_path);
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
