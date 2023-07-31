<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subject';
    protected $primaryKey = 'subjectID';
    public $incrementing = false; 
    public $timestamps = false;

    protected $fillable = [
        'subjectID',
        'subjectName',
        'time',
        'day',
        'duration',
        'userID',
        'eduID',
    ];


    // Define the relationship with EducationLevel model (if it exists)
    public function educationLevel()
    {
        return $this->belongsTo(EducationLevel::class, 'eduID');
    }
}
