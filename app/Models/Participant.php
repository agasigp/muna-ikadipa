<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    const WEST = 1;
    const CENTER = 2;
    const EAST = 3;

    public function participantDetails()
    {
        return $this->hasMany(ParticipantDetail::class);
    }
}
