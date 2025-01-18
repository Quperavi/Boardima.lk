<?php

namespace App\Providers;
use HTMLPurifier_Config;
use \Illuminate\Support\Facades\Validator;
use HTMLPurifier;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Validator::extend('xssPrevent', function ($attribute, $value, $parameters, $validator) {
            // Instantiate HTMLPurifier and sanitize the value
            
            $config = HTMLPurifier_Config::createDefault();
            $config->set('HTML.Allowed', ''); // Disallow all HTML tags and attributes
            $purifier = new HTMLPurifier($config);
            $sanitizedValue = $purifier->purify($value);
            request()->merge([$attribute => $sanitizedValue]);
            return  true;
        });

        Validator::extend('phoneValidate', function ($attribute, $value, $parameters, $validator) {
            // Instantiate HTMLPurifier and sanitize the value
            
            $digitsOnly = preg_replace('/\D/', '', $value);

            if (strlen($digitsOnly) < 10 || strlen($digitsOnly) > 15) {
                return false;
            }
            
            // Check if the phone number is in a valid format
            $regex = '/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\/\.\/0-9]*$/';
            return preg_match($regex, $value);
        });

        Validator::replacer('phoneValidate', function ($message, $attribute, $rule, $parameters) {
            // Customize the error message here
            return 'not a valid phone number.';
        });
    }
}
