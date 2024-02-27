<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    public function getdevicecode()
    {
        return $this->belongsTo('App\Models\User', 'client_id', 'id');
    }
    protected $fillable = [
        'client_id ',
        'old_reg',
        'old_chasis',
        'old_eng',
        'old_make',
        'old_model',
        'old_cc',
        'old_color',
        'old_trans',
        'old_mob',
        'old_device	',
        'old_year',
        'new_reg',
        'new_chasis	',
        'new_eng',
        'new_make',
        'new_model',
        'new_cc',
        'new_color',
        'new_trans',
        'new_mob',
        'remarks',
        'status',
        'new_year',
        'new_device'

    ];
    protected $table='removal_transfer';

}
