<?php

namespace App\Policies;

use App\Models\ScheduledClass;

use App\Models\User;

class ScheduledClassPolicy
{
    /**
     * Create a new policy instance.
     */
    // Instructor should not be able to cancel a class 2hours or less to time. And Instructor should only be able to delete what they created
    public function delete(User $user, ScheduledClass $scheduledClass) {
        return $user->id === $scheduledClass->instructor_id
        && $scheduledClass->date_time > now()->addHours(2);
    }
}
