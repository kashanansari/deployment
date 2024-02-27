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
        Schema::create('removal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('users');
            $table->string('customer_name');
            $table->string('contact_no');
            $table->string('reg_no');
            $table->string('sales_per');
            $table->string('make');
            $table->string('model');
            $table->string('color');
            $table->string('device');
            $table->string('eng_no');
            $table->string('chasis');
            $table->string('install_loc');
            $table->string('install_date');
            $table->string('remarks');
            $table->string('status');
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
        Schema::dropIfExists('removal');
    }
};
