<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DemandReqFormation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demand_req_formation', function (Blueprint $table) {
            $table->unsignedInteger('demand_id');
            $table->unsignedInteger('formation_id');
            $table->foreign('demand_id')
                ->references('id')
                ->on('demands');
            $table->foreign('formation_id')
                ->references('id')
                ->on('formations');
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
