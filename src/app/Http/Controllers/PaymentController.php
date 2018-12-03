<?php

namespace App\Http\Controllers;

use App\Repositories\StripeRepository;

class PaymentController extends Controller
{


    /**
     * Show the payment form
     *
     * @param StripeRepository $stripe
     * @return mixed
     */
    public function show(StripeRepository $stripe)
    {
        $button = $stripe->assemblePaymentForm();

        return view('payment', compact('button'));

    }


    /**
     * Store the payment
     *
     * @param StripeRepository $stripe
     * @return mixed
     */
    public function postPayment(StripeRepository $stripe)
    {
        $stripe->store();

        return redirect()->route('payment')->with('success', 'Successfully purchased products!');
    }


}
