<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_image', function (Blueprint $table) {
            $table->string('ID');
            $table->unsignedBigInteger('GAME_ID')->nullable();
            $table->longText('URL')->nullable();
            $table->timestamps();
        });
        Schema::table('game_image', function(Blueprint $table) {
            $table->foreign('GAME_ID')->references('ID')->on('game')->onDelete('CASCADE')->onUpdate('RESTRICT');
        });
    }
//CREATE TABLE `gameshop`.`game_image` ( `ID` INT NOT NULL , `GAME_ID` INT NOT NULL , `DIRECTORY` VARCHAR(200) NOT NULL, PRIMARY KEY (`ID`)) ENGINE = InnoDB;
//ALTER TABLE `game_image` ADD CONSTRAINT `CART_IMAGE_FK_GAME` FOREIGN KEY (`GAME_ID`) REFERENCES `game`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_images');
    }
}
