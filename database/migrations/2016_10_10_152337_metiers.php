<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Metiers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('metiers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('membre');
            $table->string('metier');
            $table->string('mail');
            $table->string('projet');
            $table->boolean('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('metiers');
    }
}
