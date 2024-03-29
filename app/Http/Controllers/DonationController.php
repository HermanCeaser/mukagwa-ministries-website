<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Services\Flutterwave\Payment;
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
        ]);

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
            $paymentService->processPayment($paymentDetails);
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
