<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipantDetail extends Model
{
    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }
}
