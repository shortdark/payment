<?php namespace App\Repositories;

use Exception;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class StripeRepository implements PaymentRepositoryInterface
{

    /**
     * Get a very simple version of the Stripe payment button to use as a demonstration.
     *
     * @return string
     */
    public function assemblePaymentForm(): string
    {
        $payment_form_html = "      <script
        src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
        data-key=\"pk_test_xxxxxxxxxxxxxxxxxxxxx\"
        data-amount=\"9900\"
        data-name=\"Client Website\"
        data-description=\"Example Product\"
        data-image=\"https://stripe.com/img/documentation/checkout/marketplace.png\"
        data-locale=\"auto\"
        data-zip-code=\"true\"
        data-currency=\"gbp\"
        data-label=\"Buy for £99.00\">
      </script>";
        return $payment_form_html;
    }

    /**
     * Create the charge in the Stripe API
     *
     * @return mixed
     */
    public function store()
    {
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        Stripe::setApiKey("sk_test_xxxxxxxxxxxxxxxxxxxxx");

        try{
            Charge::create([
                'amount' => 9900,
                'currency' => 'gbp',
                'description' => 'Example charge',
                'source' => $_POST['stripeToken'],
            ]);
        } catch (Exception $e) {
            return redirect()->route('payment')->with('error', $e->getMessage());
        }
    }

}