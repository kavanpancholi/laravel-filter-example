<?php

use Illuminate\Support\Facades\Facade;

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool)env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => 'file',
        // 'store'  => 'redis',
    ],

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => Facade::defaultAliases()->merge([
        // 'ExampleClass' => App\Example\ExampleClass::class,
    ])->toArray(),


    'keywords' => [
        'Python',
        'Java',
        'PHP',
        'Javascript',
        'Kotlin',
        'C++',
        'C',
        'C#',
        'Objective C',
        'Android',
        'iOS',
        'Blender',
        'Sketch',
        'HTML',
        'CSS',
        'Laravel',
        'Figma',
    ],

    'industries' => [
        'Agriculture; plantations;other rural sectors',
        'Basic Metal Production',
        'Chemical industries',
        'Commerce',
        'Construction',
        'Education',
        'Financial services; professional services',
        'Food; drink; tobacco',
        'Forestry; wood; pulp and paper',
        'Health services',
        'Hotels; tourism; catering',
        'Mining (coal; other mining)',
        'Mechanical and electrical engineering',
        'Media; culture; graphical',
        'Oil and gas production; oil refining ',
        'Postal and telecommunications services',
        'Public service',
        'Shipping; ports; fisheries; inland waterways',
        'Textiles; clothing; leather; footwear',
        'Transport (including civil aviation; railways; road transport)',
        'Transport equipment manufacturing',
        'Utilities (water; gas; electricity)',
    ],

    'area' => [
        'Frontend',
        'Backend',
        'FullStack (BE Heavy)',
        'FullStack (FE Heavy)',
        'Fullstack (Balanced)',
        'Android',
        'iOS',
    ],

    'companies' => [
        'Meta',
        'Amazon',
        'Netflix',
        'Apple',
        'Microsoft',
        'Salesforce',
        'IBM',
        'SAP',
        'Oracle',
        'Delloite',
        'Accenture',
        'TCS',
    ],

    'departments' => [
        'General Management',
        'Marketing Department',
        'Operations Department',
        'Finance Department',
        'Sales Department',
        'Human Resource Department',
        'Purchase Department',
    ],

    'salary_range' => [
        '0' => '0 Lacs',
        '50000' => '0.5 Lacs',
        '100000' => '1 Lacs',
        '150000' => '1.5 Lacs',
        '200000' => '2 Lacs',
        '250000' => '2.5 Lacs',
        '300000' => '3 Lacs',
        '350000' => '3.5 Lacs',
        '400000' => '4 Lacs',
        '450000' => '4.5 Lacs',
        '500000' => '5 Lacs',
        '550000' => '5.5 Lacs',
        '600000' => '6 Lacs',
        '650000' => '6.5 Lacs',
        '700000' => '7 Lacs',
        '750000' => '7.5 Lacs',
        '800000' => '8 Lacs',
        '850000' => '8.5 Lacs',
        '900000' => '9 Lacs',
        '950000' => '9.5 Lacs',
        '1000000' => '10 Lacs',
        '1050000' => '10.5 Lacs',
        '1100000' => '11 Lacs',
        '1150000' => '11.5 Lacs',
        '1200000' => '12 Lacs',
        '1250000' => '12.5 Lacs',
        '1300000' => '13 Lacs',
        '1350000' => '13.5 Lacs',
        '1400000' => '14 Lacs',
        '1450000' => '14.5 Lacs',
        '1500000' => '15 Lacs',
        '1550000' => '15.5 Lacs',
        '1600000' => '16 Lacs',
        '1650000' => '16.5 Lacs',
        '1700000' => '17 Lacs',
        '1750000' => '17.5 Lacs',
        '1800000' => '18 Lacs',
        '1850000' => '18.5 Lacs',
        '1900000' => '19 Lacs',
        '1950000' => '19.5 Lacs',
        '2000000' => '20 Lacs',
        '2050000' => '20.5 Lacs',
    ],
];
