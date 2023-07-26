<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'package';
    protected $primaryKey = 'packageID';
    use HasFactory;

    protected $fillable = [
        'packageID',
        'packageName',
        'packageQuantity',
        'packagePrice',
        'eduID'
    ];

}