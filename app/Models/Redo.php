<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redo extends Model
{
    public function getcountrycode()
    {
        return $this->belongsTo('App\Models\User', 'client_id', 'id');
    }
    use HasFactory;
    protected $table='Redo';
    protected $fillable = [
        'client_id',
        'complain_id', 
        'contact_no',
        'customer_name',
        'reg_no', 
        'technician',
        'charges',   
        'old_device',
        'new_device',
        'eng_no',
        'chasis_no',
        'install_loc',
        'install_date',
           'remarks',
        'sales_person',
           'harness_change',
        'backupbattery_change',
        'representative',
    
    ];
}
