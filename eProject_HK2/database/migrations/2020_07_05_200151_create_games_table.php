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
            $table->bigIncrements('ID');
            $table->string('NAME',100)->nullable();
            $table->longText('DESCRIPTION')->nullable();
            $table->integer('RATING')->nullable();
            $table->string('STATUS',30)->nullable();
            $table->integer('PRICE')->nullable();
            $table->string('LINKDOWLOAD',255)->nullable();
            $table->integer('SALE')->nullable();
            $table->integer('AGE_REQ');
            $table->string('CPU',150);
            $table->string('GPU',150);
            $table->integer('STORAGE');
            $table->string('OS',50);
            $table->integer('RAM');
            $table->unique('LINKDOWLOAD');
            $table->timestamps();
        });
    }
//CREATE TABLE `gameshop`.`game` ( `ID` INT NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(100) NOT NULL , `DESCRIPTION` LONGTEXT NOT NULL , `RATING` INT(1) NOT NULL , `STATUS` VARCHAR(30) NOT NULL , `PRICE` INT NOT NULL , PRIMARY KEY (`ID`), `KEY` VARCHAR(12) NOT NULL, `SALE` INT NOT NULL, UNIQUE(`KEY`)) ENGINE = InnoDB;

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
