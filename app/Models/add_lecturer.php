<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_lecturer extends Model
{
    use HasFactory;
    public $fillable = [
        'fname',
        'lname',
        'DOB', 
        'phone', 
        'email', 
        'units',
        'password'
    ];
}
