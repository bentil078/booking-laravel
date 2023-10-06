<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;


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

    // All members who have booked for a particlar class
    public function members() {
        return $this->belongsToMany(User::class, 'bookings');
    }

    // define a scope for queries which are used frequently
    public function scopeUpcoming(Builder $query) {
        return $query->where('date_time', '>', now());
    }

    public function scopeNotBooked(Builder $query){
        return $query->whereDoesntHave('members',function($query){
            $query->where('user_id', auth()->user()->id);
        });
    }

}
