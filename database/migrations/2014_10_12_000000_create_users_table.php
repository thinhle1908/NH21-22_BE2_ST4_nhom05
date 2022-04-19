<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('user_id');
            $table->string('user_username')->unique();;
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->string('user_phone')->unique();
            $table->string('user_firstname');
            $table->string('user_lastname');
            $table->string('user_dateofbirth')->nullable();
            $table->string('user_roleid');
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
