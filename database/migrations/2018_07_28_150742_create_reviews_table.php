<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('star');
            $table->string('comment');
            // $table->integer('user_id');
            // $table->unsignedInteger('statement_id');
            $table->integer('statement_id');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('statement_id')->references('id')->on('statements');
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
        Schema::dropIfExists('reviews');
    }
}
