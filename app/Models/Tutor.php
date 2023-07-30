<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $table = 'tutor';
    protected $primaryKey = 'userID';
    public $incrementing = false; // Set to false since userID is not auto-incrementing
    protected $keyType = 'string';

    protected $fillable = [
        'userID',
        'tutorName',
        'educationLevel',
        'workingExperience',
    ];

    // Define the inverse one-to-one relationship between Tutor and User
    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }
}