<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Award' => 'App\Policies\User\AwardPolicy',
        'App\Models\Experience' => 'App\Policies\User\ExperiencePolicy',
        'App\Models\Education' => 'App\Policies\User\EducationPolicy',
        'App\Models\Skill' => 'App\Policies\User\SkillPolicy',
        'App\Models\Service' => 'App\Policies\User\ServicePolicy',
        'App\Models\PortfolioCategory' => 'App\Policies\User\PortfolioCategoryPolicy',
        'App\Models\Portfolio' => 'App\Policies\User\PortfolioPolicy',
        'App\Models\Interest' => 'App\Policies\User\InterestPolicy',
        'App\Models\Language' => 'App\Policies\User\LanguagePolicy',
        'App\Models\BlogCategory' => 'App\Policies\User\BlogCategoryPolicy',
        'App\Models\Blog' => 'App\Policies\User\BlogPolicy',
        'App\Models\Client' => 'App\Policies\User\ClientPolicy',
        'App\Models\Testimonial' => 'App\Policies\User\TestimonialPolicy',
        'App\Models\Reference' => 'App\Policies\User\ReferencePolicy',
        'App\Models\FeatureGroup' => 'App\Policies\User\FeatureGroupPolicy',
        'App\Models\Contact' => 'App\Policies\User\ContactPolicy',
        'App\Models\Appointment' => 'App\Policies\User\AppointmentPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
