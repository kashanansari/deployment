<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Technicaldetails extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'client_code', 'id');
    }
    public function device()
    {
        return $this->belongsTo('App\Models\Deviceinventory', 'device_no', 'id');
    }
    use HasFactory;
    protected $table='technicaldetails';

}
