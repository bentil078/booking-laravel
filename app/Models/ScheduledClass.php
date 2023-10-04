<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduledClass extends Model
{
    use HasFactory;

    protected $guarded = null;

    // convert datetime from string in user input to datetime to prevent errors
    protected $casts = [
        'date_time' => 'datetime'
    ];

    // Scheduled class belongs to a user
    public function instructor(){
        return $this->belongsTo(User::class, 'instructor_id');
    }

    // Scheduled class belongs to a class type
    public function classType(){
        return $this->belongsTo(ClassType::class);
    }
}
