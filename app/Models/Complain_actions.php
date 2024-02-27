<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Complain_actions extends Model
{
    public function getcode()
    {
        return $this->belongsTo('App\Models\complain', 'complain_code', 'complain_id');
    }
    use HasFactory;
    protected $table='complian_actions';
    protected $fillable = [
        'complain_code',
        'actions',
        'remarks', // Ensure this matches the column name in the table
        'nature',
        'representative'
        
    ];


}
