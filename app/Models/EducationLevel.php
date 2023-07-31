<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EducationLevel extends Model
{
    use HasFactory;
    protected $table ='educationlevel';
    protected $primaryKey ='eduID';
    public $timestamps = true;
    public $incrementing = false;

    protected $fillable = [
        'eduID',
        'eduName'
    ];

    public function Schedule()
    {
        return $this->hasMany(Schedule::class, 'subjectID'); //hijau -table db
    }

    public function Package()
    {
        return $this->hasMany(Package::class, 'packageID'); //hijau -table db
    }
}
