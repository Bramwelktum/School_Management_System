<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_student extends Model
{
    use HasFactory;
    public $fillable = [
        'firstName',
        'lastName',
        'dob',
        'course', 
        'phoneNumber', 
        'email',
        'password'
    ];
}
