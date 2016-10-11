<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompteRendu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('compte_rendus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_projet');
            $table->string('infos');
            $table->string('global');
            $table->string('positif');
            // $table->string('negatif');
            $table->string('lundi');
            $table->string('mardi');
            $table->string('mercredi');
            $table->string('jeudi');
            $table->string('vendredi');
            $table->string('samedi');
            $table->string('dimanche');
            $table->string('negatif');
            //Champs text en fonction des metiers
            $table->string('client');
            $table->string('gantt');
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
        Schema::drop('compte_rendus');
    }
}
