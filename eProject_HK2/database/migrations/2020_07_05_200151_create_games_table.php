<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('NAME',100)->nullable();
            $table->longText('DESCRIPTION')->nullable();
            $table->boolean('RETIRED')->default(0);
            $table->integer('STATUS')->nullable();
            $table->float('PRICE')->nullable();
            $table->mediumText('LINKDOWNLOAD')->nullable();
            $table->mediumText('LINKDEMO')->nullable();
            $table->integer('SALE')->nullable();
            $table->integer('AGE_REQ')->nullable();
            $table->string('CPU',150)->nullable();
            $table->string('GPU',150)->nullable();
            $table->integer('STORAGE')->nullable();
            $table->bigInteger('OS')->unsigned()->nullable();
            $table->integer('RAM')->nullable();
            $table->string('FEATURE')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });


    }
//CREATE TABLE `gameshop`.`game` ( `ID` INT NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(100) NOT NULL , `DESCRIPTION` LONGTEXT NOT NULL , `RATING` INT(1) NOT NULL , `STATUS` VARCHAR(30) NOT NULL , `PRICE` INT NOT NULL , PRIMARY KEY (`ID`), `KEY` VARCHAR(12) NOT NULL, `SALE` INT NOT NULL, UNIQUE(`KEY`)) ENGINE = InnoDB;

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game');
    }
}
