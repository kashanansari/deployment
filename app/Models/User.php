<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    function sms()
    {
        return $this->hasMany('App\Models\SMS', 'client_id', 'id');
    }
    function renewals()
    {
        return $this->hasMany('App\Models\Renewals', 'client_id', 'id');
    }
    function Old_owner()
    {
        return $this->hasMany('App\Models\Old_owner', 'client_id', 'id');
    }
    function New_owner()
    {
        return $this->hasMany('App\Models\Datalogs', 'client_id', 'id');
    }
    function transfer()
    {
        return $this->hasMany('App\Models\Transfer', 'client_id', 'id');
    }
    function client()
    {
        return $this->hasMany('App\Models\Removal', 'client_id', 'id');
    }
    function client_id()
    {
        return $this->hasMany('App\Models\Redo', 'client_id', 'id');
    }
    function technical()
    {
        return $this->hasMany('App\Models\Technicaldetails', 'client_code', 'id');
    }
    function clientcode()
    {
        return $this->hasMany('App\Models\secutitydetails', 'client_code', 'id');
    }
    function code()
    {
        return $this->hasMany('App\Models\complain', 'client_id', 'id');
    }
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'client_id',
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
        'representative'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $table='users';
}
