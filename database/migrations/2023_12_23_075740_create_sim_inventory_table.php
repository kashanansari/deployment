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
        Schema::create('sim_inventory', function (Blueprint $table) {
            $table->id(); 
            $table->string('sim_no')->nullable();
            $table->string('icc_id')->nullable();
            $table->string('provider')->nullable();
            $table->string('status');
            $table->string('respresentative');
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
        Schema::dropIfExists('sim_inventory');
    }
};
