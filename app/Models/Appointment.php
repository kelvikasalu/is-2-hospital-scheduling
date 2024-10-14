<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // An appointment belongs to a doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class); // Ensure 'Doctor' is imported
    }

    // An appointment belongs to a patient (assuming User model represents a patient)
    public function patient()
    {
        return $this->belongsTo(User::class); // Ensure 'User' is imported
    }

    // An appointment belongs to a schedule
    public function schedule()
    {
        return $this->belongsTo(Schedule::class); // Ensure 'Schedule' is imported
    }
}
