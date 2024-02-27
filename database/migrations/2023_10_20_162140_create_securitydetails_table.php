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
        Schema::create('securitydetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_code');
            $table->foreign('client_code')->references('id')->on('users');
            $table->string('customer_email');
            $table->string('emergency_pass');
            $table->string('emergency_person');
            $table->string('security_ques');
            $table->string('security_ans');
            $table->string('password');
            $table->string('emergency_person_contact');
            $table->string('security_status')->nullable();
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
        Schema::dropIfExists('securitydetails');
    }
};
