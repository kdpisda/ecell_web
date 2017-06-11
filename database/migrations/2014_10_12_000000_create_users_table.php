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
            $table->increments('user_id');
            $table->bigInteger('rollNo')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('branch')->nullable();
            $table->bigInteger('contactNo');
            $table->string('institute');
            $table->enum('semester', ['I', 'III', 'V', 'VII'])->nullable();
            $table->enum('userType', ['ADMIN','EXECUTIVE','MANAGER','COORDINATOR','GUEST','AMBASSADOR'])->default('GUEST');
            $table->string('password');
            $table->integer('otp');
            $table->boolean('status');
            $table->rememberToken();
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
