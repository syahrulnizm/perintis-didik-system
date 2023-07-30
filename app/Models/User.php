<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    protected $table = 'user';
    protected $primaryKey = 'userID';
    public $incrementing = false; // Set to false since userID is not auto-incrementing
    protected $keyType = 'string';

    protected $fillable = [
        'userID',
        'password',
        'userName',
        'userNumber',
        'userEmail',
        'userCreateDate',
        'userStatus',
        'userType',
    ];

    // Define the one-to-one relationship between User and Student
    public function student()
    {
        return $this->hasOne(Student::class, 'userID', 'userID');
    }
}