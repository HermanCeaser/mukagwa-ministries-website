<?php

declare(strict_types=1);

namespace App\Services\Flutterwave;

use Error;
use Flutterwave\Config\PackageConfig;
use Flutterwave\Flutterwave;
use Flutterwave\EventHandlers\ModalEventHandler as PaymentHandler;
use Flutterwave\Library\Modal;
use Flutterwave\Service\Transactions;

class Payment
{

    const MODALTYPE = Modal::POPUP;

    public function init()
    {
        $myConfig = PackageConfig::setUp(
            secretKey: env('TEST_SECRET_KEY'),
            publicKey: env('TEST_PUBLIC_KEY'),
            enc: env('TEST_ENCRYPTION_KEY'),
            env: env('APP_ENV')
        );

        try {
            Flutterwave::bootstrap($myConfig);
            $customHandler = new PaymentHandler();
            $client = new Flutterwave();

            return [$client, $customHandler];
            // $modalType = Modal::POPUP; // Modal::POPUP or Modal::STANDARD

        } catch (\Exception $e) {
            throw new Error($e->getMessage());
        }
    }


    public function processPayment(array $paymentDetails)
    {

        // session_start();

        // $_SESSION['success_url'] = $paymentDetails['success_url'];
        // $_SESSION['failure_url'] = $paymentDetails['failure_url'];
        // $_SESSION['currency'] = $paymentDetails['currency'];
        // $_SESSION['amount'] = $paymentDetails['amount'];

        try {
            [$client, $handler]  = $this->init();
            // save client to session
            session()->put('api_client', $client);
            session()->put('payment_handler', $handler);
            if ('inline' === self::MODALTYPE) {
                echo $client
                    ->eventHandler($handler)
                    ->render(Modal::POPUP)->with($paymentDetails)->getHtml();
            } else {
                $paymentLink = $client
                    ->eventHandler($handler)
                    ->render(Modal::STANDARD)->with($paymentDetails)->getUrl();
                header('Location: ' . $paymentLink);
            }
        } catch (\Exception $e) {
            throw new Error($e->getMessage());
        }
    }

    public  function validateTx(string $tx_ref, string $status, $transaction_id = null)
    {
        try {
            [$payment, $handler]  = $this->init();
        } catch (\Exception $e) {
            throw new Error($e->getMessage());
        }

        if ('cancelled' === $status) {
            $payment
                ->eventHandler($handler)
                ->paymentCanceled($tx_ref);
            return ['message' => $status, 'data' => null];
        }


        if ('successful' === $status && isset($transaction_id)) {

            $history = new Transactions();
            try {
                $res = $history->verify($tx_ref);
                if ('success' === $res->status) {
                    $tx_id = $res->data->id;
                }
                return ['message' => $status, 'data' => ['transaction_id' => $tx_id]];
            } catch (\Exception $e) {
                return ['message' == 'error',  'data' => ['error' => $e->getMessage()]];
            }
        }
    }
}
