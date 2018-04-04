<?php

namespace App\Http\Controllers;

use App\Models\Donation as Donatur;
use Illuminate\Http\Request;
use App\Notifications\DonationConfirmation;

class Donation extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'telephone' => 'required|numeric',
            'email' => 'required|email',
            'amount' => 'required|numeric',
            'transfered_on' => 'required|date',
        ]);

        $donation = new Donatur();
        $donation->name = $request->name;
        $donation->address = $request->address;
        $donation->telephone = $request->telephone;
        $donation->email = $request->email;
        $donation->region = $request->region;
        $donation->amount = $request->amount;
        $donation->transfered_on = $request->transfered_on;
        $donation->save();

        $donation->notify(new DonationConfirmation($donation));

        $request->session()->flash('success', [
            'title' => 'Submit Data Berhasil!',
            'content' => 'Terima kasih sudah mendaftar untuk menjadi donatur acara Muna IKADIPA. Silahkan cek email untuk keterangan lebih lanjut mengenai proses selanjutnya.'
        ]);

        return redirect()->route('donation');
    }
}
