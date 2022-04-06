<?php

namespace App\Providers;

use App\View\Components\DefaultLayout;
use App\View\Components\Alert;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;



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
        Schema::defaultStringLength(199);
        
        Blade::directive('layout', function ($layout) {
            return "<?php if (request()->session()->get('visitor') !== null && request()->session()->get('visitor')->haslayout({$layout}) ): ?>";
        });
        Blade::directive('endlayout', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('feature', function ($feature) {
            return "<?php if (request()->session()->get('visitor') !== null && request()->session()->get('visitor')->hasFeature({$feature})): ?>";
        });
        Blade::directive('endfeature', function () {
            return "<?php endif; ?>";
        });


        Blade::directive('featuregroup', function ($featureGroup) {
            return "<?php if (request()->session()->get('visitor') !== null && request()->session()->get('visitor')->inGroup({$featureGroup})): ?>";
        });

        Blade::directive('endfeaturegroup', function () {
            return "<?php endif; ?>";
        });


        Blade::directive('groupfeature', function ($feature) {
            return "<?php if (request()->session()->get('visitor') !== null && request()->session()->get('visitor')->groupHasFeature({$feature})): ?>";
        });
        Blade::directive('endgroupfeature', function () {
            return "<?php endif; ?>";
        });
        
        Blade::directive('countdata', function ($data) {
            return "<?php if (count($data) > 0): ?>";
        });
        Blade::directive('endcountdata', function () {
            return "<?php endif; ?>";
        });


        Blade::component('dashboard', DefaultLayout::class);
        Blade::component('alert', Alert::class);
    }
}
