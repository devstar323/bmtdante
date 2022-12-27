<?php

namespace App\Http\Controllers;

use App\Aspect;
use App\Donation;
use App\Http\Requests\ShippingAddressRequest;
use App\ShippingAddress;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
     public function payment($cost)
    {
        $data = [];
 
        $data['product'] = [
            [
                'name' => 'Donation',
                'price' => $cost,
                'desc' => 'Description for donation',
                'qty' => 1
            ]
        ];
 
        $data['invoice_id'] = 1;
 
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
 
        $data['return_url'] = route('payment.success');
 
        $data['cancel_url'] = route('payment.cancel');
 
        $data['total'] = $cost;
 
        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($data);
        $response = $provider->setExpressCheckout($data, true);
 
        return redirect($response['paypal_link']);
    }

    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }
 
    public function success(Request $request)
    {
        $response = $provider->getExpressCheckoutDetails($request->token);
 
        if (in_array(strtoupper($response['ACK']) , ['SUCCESS', 'SUCCESSWITHWARNING']))
        {
            dd('Your payment was successfully. You can create success page here.');
        }
         
        dd('Something is wrong.');
    }

    
}
