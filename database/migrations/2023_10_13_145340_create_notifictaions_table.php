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
        Schema::create('notifictaions', function (Blueprint $table) {
            $table->id();

            $table->string('client_id');
            $table->string('Notification');
            $table->string('customer_name');
            $table->string('father_name');
            $table->string('telephone_residence');
            $table->text('address');
            $table->string('mobileno_1');
            $table->string('mobileno_2')->nullable();
            $table->string('mobileno_3')->nullable();
            $table->string('mobileno_4')->nullable();
            $table->string('ntn');
            $table->string('cnic');
            $table->string('primaryuser_name');
            $table->string('primaryuser_con1');
            $table->string('primaryuser_con2')->nullable();
            $table->string('primaryuser_cnic');
            $table->string('seconadryuser_name');
            $table->string('secondaryuser_con1');
            $table->string('secondaryuser_con2')->nullable();
            $table->string('relationship');
            $table->string('registeration_no');
            $table->string('chasis_no');
             $table->string('engine_no');
             $table->string('engine_type');
             $table->string('CC');
             $table->string('make');
             $table->string('model');
             $table->string('year');
             $table->string('transmission');
             $table->string('color');
             $table->string('insurance_partner');
             $table->string('vas');
             $table->string('vas_options')->nullable();
             $table->string('segment');
             $table->string('demo_duration');
             $table->string('tracker_charges');
             $table->date('date_of_installation');
             $table->string('int_comission');
             $table->string('ext_comission')->nullable();
             $table->string('discount');
             $table->string('campaign_point');
             $table->string('dealership');
             $table->string('dealer_name');
             $table->string('sales_person');
             $table->string('installation_loc');
             $table->string('conatct_person');
             $table->string('remarks')->nullable();

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
        Schema::dropIfExists('notifictaions');
    }
};
