<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Datalogs extends Model
{
    use HasFactory;
    public function getclient_id()
    {
        return $this->belongsTo('App\Models\User', 'client_id', 'id');
    }
    protected $fillable = [
        'client_id',
        'customer_name',
        'reg_no',
        'contact_no',
        'contact_person',
        'remarks',
        'representative',
        'status',
        'nature'
    ];
    protected $table='datalogs';

}
