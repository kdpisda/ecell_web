<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
       Schema::create('startups', function (Blueprint $table) {
            $table->increments('startup_id');
            $table->string('name',32);
            $table->string('description', 64);
            $table->string('owner', 2048);
            $table->string('meta');
            $table->string('contact_no');
            $table->string('contact_email');
            $table->string('address');
            $table->enum('status', ['unapproved', 'approved'])->default('unapproved');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('startups');
    }
}
