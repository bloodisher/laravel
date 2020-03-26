<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->bigInteger('films_owner_id')->nullable();
            $table->string('name');
            $table->bigInteger('genre_id');
            $table->integer('raiting');
            $table->text('director');
            $table->text('plot');
            $table->integer('year');
            $table->timestamps();
        



           /* $table->foreign('genre_id')->references('id')->on('flims_genres'); */


        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
