<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_Unit extends Model
{
    use HasFactory;
    public $fillable = [
        'unitCode', 
        'unitName', 
        'year', 
        'lecturerName'
    ];
}
