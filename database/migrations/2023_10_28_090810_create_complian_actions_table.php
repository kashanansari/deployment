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
        Schema::create('complian_actions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('complain_code');
            $table->foreign('complain_code')->references('complain_id')->on('complain');
            $table->string('actions');
            $table->string('remarks_1');
            $table->string('options');
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
        Schema::dropIfExists('complian_actions');
    }
};
