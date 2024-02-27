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
        Schema::create('ownership_transfer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('users');
            $table->string('customer');
            $table->string('cnic');
            $table->string('ntn');
            $table->string('mobile_no');
            $table->string('reg_no');
            $table->string('chasis_no');
            $table->string('eng_no');
            $table->string('device');
            $table->string('inst_date');
            $table->string('inst_loc');
            $table->string('tracker_charges');
            $table->string('model');
            $table->string('imei');
            $table->string('renewal_charges');
            $table->string('representative');
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
        Schema::dropIfExists('ownership_transfer');
    }
};
