<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Participant extends Model
{
    use Notifiable;
    
    const WEST = 1;
    const CENTER = 2;
    const EAST = 3;

    public function participantDetails()
    {
        return $this->hasMany(ParticipantDetail::class, 'participant_id');
    }
}
