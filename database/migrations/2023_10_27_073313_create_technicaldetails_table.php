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
        Schema::create('technicaldetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_code');
            $table->foreign('client_code')->references('id')->on('users');
            $table->unsignedBigInteger('device_no');
            $table->foreign('device_no')->references('id')->on('deviceinventory');
            $table->string('vendor_name');
            $table->string('device_id');
            $table->string('device_id_1');
            $table->string('IMEI_no');
            $table->text('Gsm_no');
            $table->string('Tavl_mang_id');
            $table->string('technician_name');
            $table->string('sim')->nullable();
            $table->string('Gps_check')->nullable();
            $table->string('mobilizer')->nullable();
            $table->string('operational_status');
            $table->string('webtrack_id')->nullable();
            $table->string('webtrack_pass')->nullable();
            $table->string('ignition_alerts')->nullable();
            $table->string('overspeed_alerts')->nullable();
            $table->string('geo_fence_alerts')->nullable();
            $table->string('additional_contact')->nullable();
            $table->string('contact_1')->nullable();
            $table->string('contact_2')->nullable();
            $table->string('contact_3')->nullable();
            $table->string('tracker_status')->nullable();
            $table->string('technical_status')->nullable();
            $table->string('representative')->nullable();

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
        Schema::dropIfExists('technicaldetails');
    }
};
