<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deviceinventory', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sim_id');
            $table->foreign('sim_id')->references('id')->on('sim_inventory');
            $table->string('device_serialno');
            $table->string('imei_no');
            $table->string('status');
            $table->string('vendor');
            $table->string('devciesim_no');

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
        Schema::dropIfExists('deviceinventory');
    }
};
