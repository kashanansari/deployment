<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renewals_remarks extends Model
{
    use HasFactory;
    public function getcleint()
    {
        return $this->belongsTo('App\Models\Renewals', 'renewal_id', 'id');

    }
    protected $fillable = [
        'renewal_id',
        'remarks',
        'representative',
        'recieved_renewal',
    ];

    protected $table='renewal_remarks';

}
