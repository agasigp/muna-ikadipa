<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('donation.index', [
            'donations' => Donation::where('name', 'LIKE', '%' . $request->input('q', '') . '%')->paginate(10),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $donation =  Donation::findOrFail($id);
        $donation->status = $request->status;
        $donation->save();

        $request->session()->flash('success', 'Ubah status pembayaran berhasil!');
        return redirect()->route('donations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
