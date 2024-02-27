<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siminventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'sim_no',
        'icc_id',
        'provider',
        'status',
        'representative',
    ];
    protected $table='sim_inventory';
}
