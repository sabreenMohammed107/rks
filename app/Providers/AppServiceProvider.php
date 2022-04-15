<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Company_contact;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $company = Company::where('id', 1)->first();
        $companyContact = Company_contact::where('id', 1)->first();
        view()->share(['company'=>$company,'companyContact'=>$companyContact]);
    }
}
