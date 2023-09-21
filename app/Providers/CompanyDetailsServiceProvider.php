<?php

namespace App\Providers;

use App\Models\CompanyDetail;
use Illuminate\Support\ServiceProvider;

class CompanyDetailsServiceProvider extends ServiceProvider
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
    public function boot(): void{
        $companyDetails = CompanyDetail::all();

        $formattedDetails = [];
        foreach ($companyDetails as $details) {
            $formattedDetails = $details->formatted_details;
        }

        // pass to all the views inside admin folder
        view()->composer('admin.*', function ($view) use ($formattedDetails) {
            $view->with('commonDetails', $formattedDetails);
        });
    }
}
