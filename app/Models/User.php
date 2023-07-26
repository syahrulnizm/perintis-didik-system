<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'userID';
    public $incrementing = false;

    protected $fillable = [
        'userID', 'userPass', 'userName', 'userNumber', 'userEmail', 'userCreateDate', 'userStatus',
    ];

    public function administrator()
    {
        return $this->hasOne(Administrator::class, 'userID', 'userID');
    }

    public function student()
    {
        return $this->hasOne(Student::class, 'userID', 'userID');
    }

    public function tutor()
    {
        return $this->hasOne(Tutor::class, 'userID', 'userID');
    }
}