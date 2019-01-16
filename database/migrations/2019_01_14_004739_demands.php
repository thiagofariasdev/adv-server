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
     * id | owner | servant | title | description | req_formations | req_titulations |
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
            $table->timestamps();
            $table->foreign('owner')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('servant')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demands');
    }
}
