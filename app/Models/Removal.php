<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Removal extends Model
{
    use HasFactory;
    public function getcleint()
    {
        return $this->belongsTo('App\Models\User', 'client_id', 'id');

    }
    protected $fillable = [
        'client_id',
        'customer_name',
        'contact_no',
        'reg_no',
        'make',
        'model',
        'color',
        'device ',
        'eng_no',
        'chasis',
        'install_loc',
        'install_date ',
        'remarks',
    ];

    protected $table='removal';

}
