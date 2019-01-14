<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Demands extends Migration
{
    /**
     * Run the migrations.
     * 
     * CREATE TABLE demands
     * id | owner | servant | title | description | req_formations | req_titulations | req_occupations | 
     * @return void
     */
    public function up()
    {
        Schema::create('demands', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('owner');
            $table->unsignedInteger('servant');
            $table->string('title', 100);
            $table->text('description');
            $table->string('req_formations');
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
    }
}
