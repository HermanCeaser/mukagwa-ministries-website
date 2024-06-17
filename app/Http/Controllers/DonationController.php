<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use DateTime;
use Illuminate\Http\Request;
use App\Services\Flutterwave\Payment;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class DonationController extends Controller
{

    public function index(Request $request, Payment $paymentService)
    {
        $title = "Make a Donation";

        if ($request->has('status') && $request->has('tx_ref')) {
            // $response = $paymentService->validateTx(
            //     tx_ref: $request->tx_ref,
            //     status: $request->status,
            //     transaction_id: $request->transaction_id);

            $status = $request->status;
            if ($status == 'successful') {
                return redirect()->route('donation.index')->with('success', 'The Donation has been Successfull✅. Thank you 🤝');
            } else if ($status == 'cancelled') {
                return redirect()->route('donation.index')->with('error', 'Your Transaction was Cancelled! Try Again');
            } else {
                return redirect()->route('donation.index')->with('error', 'Something Unexpected Happened');
            }
        }
        return view('pages.donate', compact('title'));
    }


    public function store(Request $request, Payment $paymentService)
    {
        $request->validate([
            'currency' => 'required',
            'amount' => ['required', 'regex:/^\d{1,3}(,\d{3})*(\.\d{2})?$/'], // Validates currency amount
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'nullable',
            'address' => 'nullable',
            'comment' => 'nullable',
            'country' => 'required',
            'payment_means' => 'required|in:mobile_money,bank'
        ]);

        
        $nationality = Config::get('constants.COUNTRIES')[$request->country];    

        $paymentDetails = [
            'currency' => $request->currency,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'country' => $request->country,
            'tx_ref' => $this->generateTxRef(),
            'country' => $request->country,
            'amount' =>  preg_replace("/\D/", '', $request->amount),
            'redirect_url' => $_SERVER['HTTP_ORIGIN'] . $_SERVER['REQUEST_URI'],
            'payment_method' => 'card',
            'customizations' => [
                'title' => "Donation Payment",
                'description' => "Payment for a donation",
                'logo' => "https://www.wokober.com/images/img/logo-mobile.png",
            ],
            'merchant' => [
                'name' => env('APP_NAME'),
            ]
        ];

        try {
            // $paymentService->processPayment($paymentDetails);

            Donation::create([
                'customer_name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'nationality' => $nationality,
                'amount' => preg_replace("/\D/", '', $request->input('amount')),
                'currency' => $request->currency,
                'payment_means' => $request->payment_means,
                'comment' => $request->comment
            ]);

            return redirect('donation')->with('success', 'Thank you for your Donation 🙏. May the good Lord reward you abundantly!!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Failed To process Transaction! Try Again');
        }
    }


    public function generateTxRef()
    {
        $timestamp = (string)(new DateTime())->getTimestamp();
        $randomNum = random_int(10000, 99999); // generates a random number between 10000 and 99999
        $txRef = "TX_{$timestamp}{$randomNum}";
        return $txRef;
    }
}
