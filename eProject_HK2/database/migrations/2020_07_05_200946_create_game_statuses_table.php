<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_status', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('NAME',30)->nullable();
            $table->timestamps();
        });
    }
// CREATE TABLE `gameshop`.`game_status` ( `ID` INT NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(30) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_status');
    }
}
