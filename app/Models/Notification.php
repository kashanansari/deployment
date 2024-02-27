<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'Notification',
        'customer_name',
        'father_name',
        'telephone_residence',
        'address',
        'mobileno_1',
        'mobileno_2',
        'mobileno_3',
        'mobileno_4',
        'ntn',
        'cnic',
        'primaryuser_name',
        'primaryuser_con1',
        'primaryuser_con2',
        'primaryuser_cnic',
        'seconadryuser_name',
        'secondaryuser_con1',
        'secondaryuser_con2',
        'relationship',
        'registeration_no',
        'chasis_no',
        'engine_no',
        'engine_type',
        'CC',
        'make',
        'model',
        'year',
        'transmission',
        'color',
        'insurance_partner',
        'vas',
        'vas_options',
        'segment',
        'demo_duration',
        'tracker_charges',
        'date_of_installation',
        'int_comission',
        'ext_comission',
        'discount',
        'campaign_point',
        'dealership',
        'dealer_name',
        'sales_person',
        'installation_loc',
        'conatct_person',
        'remarks',
    ];


    protected $table='notifictaions';

}
