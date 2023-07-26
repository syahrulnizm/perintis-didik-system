<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    protected $table = 'educationlevel';
    protected $primaryKey = 'eduID';
    use HasFactory;

    protected $fillable = [
        'eduID',
        'eduName'
    ];

}