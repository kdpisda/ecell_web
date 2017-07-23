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
            $table->increments('id');
            $table->bigInteger('roll_no')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('branch')->nullable();
            $table->bigInteger('contact_no')->nullable();
            $table->string('institute')->nullable();
            $table->enum('semester', ['I', 'III', 'V', 'VII'])->nullable();
            $table->enum('user_type', ['ADMIN','EXECUTIVE','MANAGER','COORDINATOR','GUEST','AMBASSADOR'])->default('GUEST');
            $table->string('password');
            $table->integer('otp')->default(0);
            $table->boolean('status')->default(False);
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
