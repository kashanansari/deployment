<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
class secutitydetails extends Model
{
    use HasFactory;
    protected $table='securitydetails';
    public function getclientcode()
    {
        return $this->belongsTo('App\Models\User', 'client_code', 'id');
    }

}
