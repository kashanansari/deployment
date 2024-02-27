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
        Schema::create('renewal_remarks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('renewal_id');
            $table->foreign('renewal_id')->references('id')->on('renewals');
            $table->string('remarks')->nullable();
            $table->string('recieved_renewal')->nullable();
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
        Schema::dropIfExists('renewal_remarks');
    }
};
