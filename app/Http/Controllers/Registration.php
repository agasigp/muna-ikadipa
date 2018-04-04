<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Participant;
use App\Models\ParticipantDetail;

class Registration extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'telephone' => 'required|numeric',
            'email' => 'required|email',
            'parent' => 'required',
            'agreement' => 'required',
        ]);

        DB::transaction(function () use ($request) {
            $participant = new Participant();
            $participant->name = $request->name;
            $participant->address = $request->address;
            $participant->telephone = $request->telephone;
            $participant->email = $request->email;
            $participant->parent_name = $request->parent;
            $participant->region = $request->region;
            $participant->save();

            foreach ($request->participant_detail_name as $key => $val) {
                if (! is_null($val)) {
                    $participant_detail = new ParticipantDetail();
                    $participant_detail->participant_id = $participant->id;
                    $participant_detail->name = $val;
                    $participant_detail->age = $request->participant_detail_age[$key];
                    $participant_detail->sex = $request->participant_detail_sex[$key];
                    $participant_detail->save();
                }
            }
        });

        $request->session()->flash('success', 'Pendaftaran berhasil!');
        return redirect()->route('registration');
    }
}
