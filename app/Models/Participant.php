<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function participantDetails()
    {
        return $this->hasMany(ParticipantDetail::class);
    }
}
