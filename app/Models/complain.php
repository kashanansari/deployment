<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complain extends Model
{
    protected $table='complain';

    use HasFactory;
    public function getcode()
    {
        return $this->belongsTo('App\Models\User', 'client_id', 'id');
    }
    function complain_code()
    {
        return $this->hasMany('App\Models\Complain_actions', 'complain_code', 'complain_id');
    }
}
