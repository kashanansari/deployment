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
        Schema::create('complain', function (Blueprint $table) {
            $table->id('complain_id');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('users');
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('emp_id')->on('workers');
            $table->string('customer_name');
            $table->string('emp_login_id')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('reg_no');
            $table->string('nature_of_complain');
            $table->string('remarks');
            $table->string('Status');
            $table->string('confirmed')->nullable();
            $table->date('last location')->nullable();
            $table->date('Date')->nullable();
            $table->time('Time')->nullable();
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
        Schema::dropIfExists('complain');
    }
};
