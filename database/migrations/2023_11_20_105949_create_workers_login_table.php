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
        Schema::create('workers_login', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('emp_id')->on('workers');
            $table->string('Emp_name')->nullable();
            $table->string('login_id')->nullable();
            $table->string('password')->nullable();
            $table->string('login_date')->nullable();
            $table->string('login_time')->nullable(); // Column to store the day of the week
            $table->string('logout_time')->nullable(); // Column to store the day of the week
            $table->string('logout_date')->nullable(); // Column to store the day of the week

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
        Schema::dropIfExists('workers_login');
    }
};
