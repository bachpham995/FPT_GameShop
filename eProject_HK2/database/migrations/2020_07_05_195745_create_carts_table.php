<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('USER_ID')->nullable();
            $table->date('ORDER_DATE')->nullable();
            $table->timestamps();
        });
        Schema::table('cart', function(Blueprint $table) {
            $table->foreign('USER_ID')->references('ID')->on('user')->onDelete('RESTRICT')->onUpdate('RESTRICT');

        });
    }

//CREATE TABLE `gameshop`.`cart` ( `ID` INT NOT NULL , `USER_ID` INT NOT NULL , `ORDER_DATE` DATE NOT NULL,PRIMARY KEY (`ID`)) ENGINE = InnoDB;
//ALTER TABLE `cart` ADD CONSTRAINT `CART_FK_USER` FOREIGN KEY (`USER_ID`) REFERENCES `user`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
