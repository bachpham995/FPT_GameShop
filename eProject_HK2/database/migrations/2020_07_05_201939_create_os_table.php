<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('os', function (Blueprint $table) {
            $table->unsignedBigInteger('ID')->autoIncrement();
            $table->string('NAME',150)->nullable();
            $table->boolean('RETIRED')->default(0);
            $table->timestamps();
        });
    }
//CREATE TABLE `gameshop`.`os` ( `ID` INT NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(100) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
//ALTER TABLE `os` ADD CONSTRAINT `OS-FK` FOREIGN KEY (`ID`) REFERENCES `game`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
/**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('os');
    }
}
