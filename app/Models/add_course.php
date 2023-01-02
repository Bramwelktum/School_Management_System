<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_course extends Model
{
    use HasFactory;
    public $fillable = [
        'courseName',
        'type',
        'duration', 
        'faculty'
    ]; 
}
