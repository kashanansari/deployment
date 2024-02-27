<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'reg_no',
        'date',
        'reg_no',
        'time',
        'representative',
        'status'
    ];

    protected $table='Queue';

}
