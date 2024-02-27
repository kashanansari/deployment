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
        Schema::create('workers', function (Blueprint $table) {
            $table->id('emp_id');
            $table->string('emp_name');
            $table->string('em_loginid');
            $table->string('password');
            $table->text('designation');
            $table->string('contact');
            $table->string('cnic', 15); // Adjust the length based on your actual CNIC format
            $table->string('role');
            $table->string('image')->nullable(); // Store the file path or URL
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
        Schema::dropIfExists('workers');
    }
};
