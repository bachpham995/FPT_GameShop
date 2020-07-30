<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('GAME_ID')->nullable();
            $table->unsignedBigInteger('USER_ID')->nullable();
            $table->integer('RATING')->nullable();
            $table->string('DESCRIPTION',255)->nullable();
            $table->timestamps();
        });
        Schema::table('comment', function(Blueprint $table) {
            $table->foreign('GAME_ID')->references('ID')->on('game')->onDelete('CASCADE')->onUpdate('RESTRICT');
            $table->foreign('USER_ID')->references('ID')->on('user')->onDelete('CASCADE')->onUpdate('RESTRICT');
        });

        Schema::table('game', function(Blueprint $table) {
            $table->foreign('OS')->references('ID')->on('os')->onDelete('RESTRICT')->onUpdate('RESTRICT');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
