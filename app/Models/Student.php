<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';
    protected $primaryKey = 'userID';
    public $incrementing = false; // Set to false since userID is not auto-incrementing
    protected $keyType = 'string';

    protected $fillable = [
        'userID',
        'guardianName',
        'studentAddress',
        'guardianNumber',
    ];

    // Define the inverse one-to-one relationship between Student and User
    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }
}