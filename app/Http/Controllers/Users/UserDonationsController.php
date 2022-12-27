<?php

namespace App\Http\Controllers\Users;

use App\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserDonationsController extends UsersBaseController
{
    public function myDonations()
    {
        $userId = Auth::user()->id;
        $myDonations = Donation::where('user_id', $userId)->latest()->paginate(10);
        return view('public.users.donations', compact('myDonations'));
    }

    public function deleteDonation($id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();

        return redirect()->back()->with('alert_message', 'Your donation deleted');
    }
}
