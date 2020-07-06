<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_item', function (Blueprint $table) {
            // $table->integer('CART_ITEM_ID');
            $table->integer('CART_ID');
            $table->integer('GAME_ID');
            $table->integer('GAME_QUANTITY')->nullable();
            $table->integer('DISCOUNT')->nullable();
            $table->primary(array('CART_ID', 'GAME_ID'));
            $table->timestamps();
        });
        Schema::table('cart_item', function(Blueprint $table) {
            $table->foreign('CART_ID')->references('ID')->on('cart')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->foreign('GAME_ID')->references('ID')->on('game')->onDelete('RESTRICT')->onUpdate('RESTRICT');
        });
    }
//CREATE TABLE `gameshop`.`cart_item` ( `CART_ID` INT NOT NULL , `GAME_ID` INT NOT NULL , `GAME_QUANTITY` INT NOT NULL ,
// `DISCOUNT` INT NOT NULL, PRIMARY KEY (`CART_ID`, `GAME_ID`)) ENGINE = InnoDB;
//ALTER TABLE `cart_item` ADD CONSTRAINT `CART_ITEM_FK_CART` FOREIGN KEY (`CART_ID`) REFERENCES `cart`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
//ALTER TABLE `cart_item` ADD CONSTRAINT `CART_ITEM_FK_GAME` FOREIGN KEY (`GAME_ID`) REFERENCES `game`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
/**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_item');
    }
}
