<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name', 100);
            $table->string('email')->unique();
            $table->string('avatar', 500)->default('/svg/user_fema.svg');
            $table->string('about', 500)->nullable();
            $table->text('exp')->nullable();
            $table->boolean('gender')->default(true);
            $table->integer('atuation')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 60);
            $table->string('api_token', 60);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
