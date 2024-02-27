<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Deviceinventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'device_serialno',
        // Add any other attributes you want to be mass-assignable here
        'status', // Add the 'status' attribute to the array
    ];
    protected $table='deviceinventory';
   public  function technical()
    {
        return $this->hasMany('App\Models\Technicaldetails', 'device_no', 'id');
    }
}
