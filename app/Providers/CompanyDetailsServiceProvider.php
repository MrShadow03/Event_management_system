<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\CompanyDetail;

use function PHPSTORM_META\map;
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
        
        $detailsForClient = [
            'name' => $formattedDetails['name'],
            'address' => $formattedDetails['address'],
            'phone' => $formattedDetails['phone'],
            'email' => $formattedDetails['email'],
            'logo' => $formattedDetails['logo'],
            'favicon' => $formattedDetails['favicon'],
            'product_VAT' => $formattedDetails['product_VAT'],
        ];

        // pass to all the views inside admin folder
        view()->composer('customer.*', function ($view) use ($detailsForClient) {
            $view->with('commonDetails', $detailsForClient);
        });
        
        // pass to all the views inside admin folder
        view()->composer('website.*', function ($view) use ($detailsForClient) {
            $view->with('commonDetails', $detailsForClient);
        });
        
        // Get all the categories and pass to all the views website folder
        view()->composer('website.*', function ($view) {
            $view->with('categories_shared', Category::all());
        });
    }
}
