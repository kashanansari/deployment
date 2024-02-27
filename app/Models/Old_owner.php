<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Old_owner extends Model
{
    use HasFactory;
    public function getclient_id()
    {
        return $this->belongsTo('App\Models\User', 'client_id', 'id');
    }
    protected $table='ownership_transfer';

}
