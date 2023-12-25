<?php

namespace App\Providers;

use App\Models\Invoice;
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
            'facebook' => $formattedDetails['facebook'],
            'twitter' => $formattedDetails['twitter'],
            'whatsapp' => $formattedDetails['whatsapp'],
            'linkedin' => $formattedDetails['linkedin'],
            'youtube' => $formattedDetails['youtube'],
            'CEO_image' => $formattedDetails['CEO_image'],
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

        // Sidebar information
        $pending_count = Invoice::whereHas('rentals', function($query){
            $query->where('status', 'pending approval');
        })->with(['rentals.product', 'customer'])->get()->count();

        $date = date("Y-m-d");
        $dispatch_count = Invoice::whereHas('rentals', function($query) use ($date){
            $query->where('status', 'approved')
                ->whereDate('starting_date', $date);
        })->with(['rentals', 'customer'])->get()->count();

        $return_count = Invoice::whereHas('rentals', function($query){
            $query->where('status', 'rented');
        })->with(['rentals.product', 'customer'])->get()->count();

        // pass to all the views inside admin folder
        view()->composer('admin.*', function ($view) use ($pending_count, $dispatch_count, $return_count) {
            $view->with('pending_count', $pending_count);
            $view->with('dispatch_count', $dispatch_count);
            $view->with('return_count', $return_count);
        });
    }
}
