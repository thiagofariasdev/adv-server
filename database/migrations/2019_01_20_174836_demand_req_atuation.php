<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DemandReqAtuation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demand_req_atuation', function (Blueprint $table) {
            $table->unsignedInteger('demand_id');
            $table->unsignedInteger('atuation_id');
            $table->foreign('demand_id')
                ->references('id')
                ->on('demands');
            $table->foreign('atuation_id')
                ->references('id')
                ->on('atuations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demand_req_atuation');
    }
}
