<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_category', function (Blueprint $table) {
            $table->integer('GAME_ID');
            $table->integer('CATEGORY_ID');
            $table->timestamps();
        });
        Schema::table('game_category', function(Blueprint $table) {
            $table->foreign('GAME_ID')->references('ID')->on('game')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->foreign('CATEGORY_ID')->references('ID')->on('category')->onDelete('RESTRICT')->onUpdate('RESTRICT');
        });
    }
//CREATE TABLE `gameshop`.`game_category` ( `GAME_ID` INT NOT NULL , `CATEGORY_ID` INT NOT NULL, PRIMARY KEY (`CATEGORY_ID` , `GAME_ID`)) ENGINE = InnoDB;
//ALTER TABLE `game_category` ADD CONSTRAINT `GAME_CATE_FK_GAME` FOREIGN KEY (`GAME_ID`) REFERENCES `game`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
//ALTER TABLE `game_category` ADD CONSTRAINT `GAME_CATE_FK_CATE` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `category`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_category');
    }
}







