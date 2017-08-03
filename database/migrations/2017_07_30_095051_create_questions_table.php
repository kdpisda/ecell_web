<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('question_id');
            $table->string('question',32);
            $table->string('description',256);
            $table->json('meta');
            $table->string('timelimit');
            $table->string('score');
            $table->enum('question_type',['text','image'])->default('text');
            $table->enum('status', ['unapproved', 'approved'])->default('unapproved');
            $table->integer('question_set')->unsigned();
            $table->foreign('question_set')->references('question_set_id')->on('question_sets');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
