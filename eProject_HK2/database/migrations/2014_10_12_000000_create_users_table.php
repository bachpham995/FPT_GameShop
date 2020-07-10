<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->integer('TYPE')->nullable();
            $table->string('FNAME',150)->nullable();
            $table->string('LNAME',150)->nullable();
            $table->string('EMAIL',100)->nullable();;
            $table->string('PASSWORD',30)->nullable();
            $table->string('ADDRESS',150)->nullable();
            $table->string('PHONE',15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
