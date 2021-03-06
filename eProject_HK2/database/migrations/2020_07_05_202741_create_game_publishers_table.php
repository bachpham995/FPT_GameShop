<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamePublishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_publisher', function (Blueprint $table) {
            $table->unsignedBigInteger('GAME_ID');
            $table->unsignedBigInteger('PUBLISHER_ID');
            $table->primary(array('GAME_ID', 'PUBLISHER_ID'));
            $table->timestamps();
        });
        Schema::table('game_publisher', function(Blueprint $table) {
            $table->foreign('GAME_ID')->references('ID')->on('game')->onDelete('CASCADE')->onUpdate('RESTRICT');
            $table->foreign('PUBLISHER_ID')->references('ID')->on('publisher')->onDelete('CASCADE')->onUpdate('RESTRICT');
        });
    }
//CREATE TABLE `gameshop`.`game_publisher` ( `GAME_ID` INT NOT NULL , `PUBLISHER_ID` INT NOT NULL, PRIMARY KEY (`PUBLISHER_ID` , `GAME_ID`)) ENGINE = InnoDB;
//ALTER TABLE `game_publisher` ADD CONSTRAINT `GAME_PUB_FK_GAME` FOREIGN KEY (`GAME_ID`) REFERENCES `game`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
//ALTER TABLE `game_publisher` ADD CONSTRAINT `GAME_PUB_FK_PUB` FOREIGN KEY (`PUBLISHER_ID`) REFERENCES `publisher`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_publisher');
    }
}
