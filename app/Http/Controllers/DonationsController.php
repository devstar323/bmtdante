<?php

namespace App\Http\Controllers;

use App\Aspect;
use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationsController extends Controller
{
    public function store(Aspect $aspect , Request $request)
    {
        $rules = [
            'body'          => 'required'
        ];
        $message = [
            'body.required' => "Comment body can't be empty"
        ];
        $this->validate($request, $rules, $message);

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['aspect_id'] = $aspect->id;

        $donation = Donation::create($input);

        return redirect()->back()->with('success_message', 'Your donation added');
    }

}
