<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameProducersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_producer', function (Blueprint $table) {
            $table->unsignedBigInteger('GAME_ID');
            $table->unsignedBigInteger('PRODUCER_ID');
            $table->primary(array('GAME_ID', 'PRODUCER_ID'));
            $table->timestamps();
        });
        Schema::table('game_producer', function(Blueprint $table) {
            $table->foreign('GAME_ID')->references('ID')->on('game')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->foreign('PRODUCER_ID')->references('ID')->on('producer')->onDelete('RESTRICT')->onUpdate('RESTRICT');
        });
    }
//CREATE TABLE `gameshop`.`game_producer` ( `GAME_ID` INT NOT NULL , `PRODUCER_ID` INT NOT NULL, PRIMARY KEY (`PRODUCER_ID` , `GAME_ID`)) ENGINE = InnoDB;
//ALTER TABLE `game_producer` ADD CONSTRAINT `GAME_PROD_FK_GAME` FOREIGN KEY (`GAME_ID`) REFERENCES `game`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
//ALTER TABLE `game_producer` ADD CONSTRAINT `GAME_PROD_FK_PROD` FOREIGN KEY (`PRODUCER_ID`) REFERENCES `producer`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_producer');
    }
}
