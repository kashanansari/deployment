<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renewals extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'client_id', 'id');
    }
    function New_owner()
    {
        return $this->hasMany('App\Models\Renewals_remarks', 'renewal_id', 'id');
    }
    protected $fillable = [
        'client_id',
        'customer_name',
        'login_id',
        'renewal_charges',
        'reg_no',
        'renewal_status',
        'renewal_date',

    ];

    protected $table='renewals';

}
