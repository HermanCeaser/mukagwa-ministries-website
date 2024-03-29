<?php

namespace App\Providers;

use Flutterwave\Config\PackageConfig;
use Flutterwave\Flutterwave;
use Illuminate\Support\ServiceProvider;

class FlutterwaveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $myConfig = PackageConfig::setUp(
            secretKey: env('TEST_SECRET_KEY'),
            publicKey: env('TEST_PUBLIC_KEY'),
            enc: env('TEST_ENCRYPTION_KEY'),
            env: env('APP_ENV')
        );

        // Flutterwave::bootstrap($myConfig);
        dd($myConfig);
    }
}
