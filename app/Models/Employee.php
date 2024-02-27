<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory, HasApiTokens; 
       function emp_id()
    {
        return $this->hasMany('App\Models\Attendance', 'emp_id', 'emp_id');
    }
    function emp_login()
    {
        return $this->hasMany('App\Models\Emp_login', 'emp_id', 'emp_id');
    }
    function emp_logout()
    {
        return $this->hasMany('App\Models\Emp_logout', 'emp_id', 'emp_id');
    }
    function emp_logs()
    {
        return $this->hasMany('App\Models\Emp_logs', 'emp_id', 'emp_id');
    }
    function inventory_logs()
    {
        return $this->hasMany('App\Models\Inventory_logs', 'emp_id', 'emp_id');
    }
    protected $primaryKey = 'emp_id';

    protected $fillable = [
        'emp_id',
        'emp_name',
        'em_loginid', // Ensure this matches the column name in the table
        'password',
        'designation',
        'contact',
        'cnic',
        'role',
        'image',
        'status',
    ];

    protected $table='workers';

}
