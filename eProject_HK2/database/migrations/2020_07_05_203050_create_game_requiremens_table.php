<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameRequiremensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_requirement', function (Blueprint $table) {
            $table->bigIncrements('ID')->primary();
            $table->integer('GAME_ID')->nullable();
            $table->integer('AGE_REQ')->nullable();
            $table->string('CPU',150)->nullable();
            $table->string('GPU',150)->nullable();
            $table->integer('RAM',10)->nullable();
            $table->integer('STORAGE')->nullable();
            $table->string('OS',50)->nullable();
            $table->unique('GAME_ID');
            $table->timestamps();
        });
        Schema::table('game_requirement', function(Blueprint $table) {
            $table->foreign('GAME_ID')->references('ID')->on('game')->onDelete('RESTRICT')->onUpdate('RESTRICT');
        });
    }
//CREATE TABLE `gameshop`.`game_requirement` ( `ID` INT NOT NULL AUTO_INCREMENT , `GAME_ID` INT NOT NULL , `AGE_REQ` INT NOT NULL , `CPU` VARCHAR(150) NOT NULL , `GPU` VARCHAR(150) NOT NULL ,
// `RAM` INT NOT NULL , `STORAGE` INT NOT NULL , `OS` VARCHAR(50) NOT NULL , PRIMARY KEY (`ID`), UNIQUE (`GAME_ID`)) ENGINE = InnoDB;
//ALTER TABLE `game_requirement` ADD CONSTRAINT `GAME_REQ_FK_GAME` FOREIGN KEY (`GAME_ID`) REFERENCES `game`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_requirement');
    }
}
