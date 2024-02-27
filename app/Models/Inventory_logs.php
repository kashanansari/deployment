<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_logs extends Model
{
    use HasFactory;
    public function get_emp()
    {
        return $this->belongsTo('App\Models\Employee', 'emp_id', 'emp_id');
    }    protected $table='deviceinventory_logs';
    // protected $primaryKey = 'emp_id';
    protected $fillable = [
        'emp_id',
        'emp_login_id',
        'emp_name',
        'actions',
        'status',
        'device_serialno',


    ];
}
