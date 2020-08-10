<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producer', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('NAME',150)->nullable();
            $table->boolean('RETIRED')->default(0);
            $table->timestamps();
        });
    }
///CREATE TABLE `gameshop`.`producer` ( `ID` INT NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(30) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producer');
    }
}
