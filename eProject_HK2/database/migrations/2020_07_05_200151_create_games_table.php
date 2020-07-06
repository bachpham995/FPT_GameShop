<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->string('NAME',100)->nullable();
            $table->longText('DESCRIPTION')->nullable();
            $table->integer('RATING')->nullable();
            $table->string('STATUS',30)->nullable();
            $table->string('KEY',12)->nullable();
            $table->integer('SALE')->nullable();
            $table->unique('KEY');
            $table->timestamps();
        });
    }
//CREATE TABLE `gameshop`.`game` ( `ID` INT NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(100) NOT NULL , `DESCRIPTION` LONGTEXT NOT NULL , `RATING` INT(1) NOT NULL , `STATUS` VARCHAR(30) NOT NULL ,

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game');
    }
}
