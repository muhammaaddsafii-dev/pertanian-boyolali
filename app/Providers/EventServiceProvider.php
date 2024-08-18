<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\BangakUpdated; // Impor event yang baru dibuat
use App\Events\BanyudonoUpdated;
use App\Events\BatanUpdated;
use App\Events\CangkringanUpdated;
use App\Listeners\UpdateBangakGeojson; // Impor listener yang baru dibuat
use App\Listeners\UpdateBanyudonoGeojson;
use App\Listeners\UpdateBatanGeojson;
use App\Listeners\UpdateCangkringanGeojson;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        BangakUpdated::class => [ // Daftarkan event baru
            UpdateBangakGeojson::class, // Daftarkan listener untuk event ini
        ],

        BanyudonoUpdated::class => [ // Daftarkan event baru
            UpdateBanyudonoGeojson::class, // Daftarkan listener untuk event ini
        ],

        BatanUpdated::class => [ // Daftarkan event baru
            UpdateBatanGeojson::class, // Daftarkan listener untuk event ini
        ],

        CangkringanUpdated::class => [ // Daftarkan event baru
            UpdateCangkringanGeojson::class, // Daftarkan listener untuk event ini
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
