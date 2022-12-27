<?php

namespace App\Http\Controllers;

use App\Aspect;
use App\Donation;
use App\Http\Requests\ShippingAddressRequest;
use App\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Customer;
use Cart;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Cart::content()->count()){
            return view('public.checkout-page');
        // }
        // abort(403, 'Cart is empty! you can not checkout');
    }

    public function check_index($id)
    {
        $selected_aspect = Aspect::findOrFail($id);
        // return $selected_aspect;
        return view('public.checkout-page', compact('selected_aspect'));
    }

    public function pay(Request $request)
    {
        try{
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $token = $request->stripeToken;
            $total = $request->cart_total;

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $token
            ));
            
            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $total*100,
                'currency' => 'USD'
            ));

            return 'Charge successful!';
        } catch(\Exception $ex) {
            return $ex->getMessage();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, ShippingAddressRequest $request)
    {
        $input = $request->all();

        $input['user_id'] = Auth::user()->id;

        $shipping = ShippingAddress::create([
            'user_id' => $input['user_id'], 
            'shipping_name' => $input['shipping_name'], 
            'mobile_no' => $input['mobile_no'], 
            'address' => $input['address']  
        ]);

        $donation = Donation::create([
            'user_id' => $input['user_id'], 
            'aspect_id' => $id, 
            'body' => $input['donation_amount']
        ]);

        $cost = $donation['body'];

        // $shipping = ShippingAddress::create($input);
        // return redirect()->route('cart.payment',$donation['body']);
        return view('public.payment', compact('cost'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($cost)
    // {

    //     return view('public.payment', compact('cost'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
