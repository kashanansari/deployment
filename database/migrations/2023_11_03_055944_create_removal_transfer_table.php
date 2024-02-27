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
        Schema::create('removal_transfer', function (Blueprint $table) {
            $table->id();
            //new device
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('users');
            $table->string('old_reg');
            $table->string('old_chasis');
            $table->string('old_eng');
            $table->string('old_make');
            $table->string('old_model');
            $table->string('old_cc');
            $table->string('old_color');
            $table->string('old_trans');
            $table->string('old_mob');
            $table->string('old_device');
            $table->string('old_inst_loc');
//New Device
            $table->string('new_reg');
            $table->string('new_chasis');
            $table->string('new_eng');
            $table->string('new_make');
            $table->string('new_model');
            $table->string('new_cc');
            $table->string('new_color');
            $table->string('new_trans');
            $table->string('new_mob');
            $table->string('representative');
            $table->string('new_inst_loc');

            $table->string('remarks')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('removal_transfer');
    }
};
