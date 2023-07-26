<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $primaryKey = 'userID';
    public $incrementing = false;

    protected $fillable = [
        'userID', 'adminRoles', 'officeNumber',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }
}
