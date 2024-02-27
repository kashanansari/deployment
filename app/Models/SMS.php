<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SMS extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'customer_name',
        'reg_no',
        'contact',
        'sms_type',
        'message',
        'representative',


    ];
    public function get_cleintid()
    {
        return $this->belongsTo('App\Models\User', 'client_id', 'id');
    }
    protected $table='sms';

}
