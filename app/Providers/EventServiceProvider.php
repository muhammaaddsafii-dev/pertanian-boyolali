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
use App\Events\DenggunganUpdated;
use App\Events\DukuhUpdated;
use App\Events\JembunganUpdated;
use App\Events\JipanganUpdated;
use App\Events\KetaonUpdated;
use App\Events\KuwranUpdated;
use App\Events\NgaruAruUpdated;
use App\Events\SambonUpdated;
use App\Events\TanjungSariUpdated;
use App\Events\TrayuUpdated;
use App\Listeners\UpdateBangakGeojson; // Impor listener yang baru dibuat
use App\Listeners\UpdateBanyudonoGeojson;
use App\Listeners\UpdateBatanGeojson;
use App\Listeners\UpdateCangkringanGeojson;
use App\Listeners\UpdateDenggunganGeojson;
use App\Listeners\UpdateDukuhGeojson;
use App\Listeners\UpdateJembunganGeojson;
use App\Listeners\UpdateJipanganGeojson;
use App\Listeners\UpdateKetaonGeojson;
use App\Listeners\UpdateKuwranGeojson;
use App\Listeners\UpdateNgaruAruGeojson;
use App\Listeners\UpdateSambonGeojson;
use App\Listeners\UpdateTanjungSariGeojson;
use App\Listeners\UpdateTrayuGeojson;
use App\Models\Denggungan;

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

        DenggunganUpdated::class => [ // Daftarkan event baru
            UpdateDenggunganGeojson::class, // Daftarkan listener untuk event ini
        ],

        DukuhUpdated::class => [ // Daftarkan event baru
            UpdateDukuhGeojson::class, // Daftarkan listener untuk event ini
        ],

        JembunganUpdated::class => [ // Daftarkan event baru
            UpdateJembunganGeojson::class, // Daftarkan listener untuk event ini
        ],

        JipanganUpdated::class => [ // Daftarkan event baru
            UpdateJipanganGeojson::class, // Daftarkan listener untuk event ini
        ],

        KetaonUpdated::class => [ // Daftarkan event baru
            UpdateKetaonGeojson::class, // Daftarkan listener untuk event ini
        ],

        KuwranUpdated::class => [ // Daftarkan event baru
            UpdateKuwranGeojson::class, // Daftarkan listener untuk event ini
        ],

        NgaruAruUpdated::class => [ // Daftarkan event baru
            UpdateNgaruAruGeojson::class, // Daftarkan listener untuk event ini
        ],

        SambonUpdated::class => [ // Daftarkan event baru
            UpdateSambonGeojson::class, // Daftarkan listener untuk event ini
        ],

        TanjungSariUpdated::class => [ // Daftarkan event baru
            UpdateTanjungSariGeojson::class, // Daftarkan listener untuk event ini
        ],

        TrayuUpdated::class => [ // Daftarkan event baru
            UpdateTrayuGeojson::class, // Daftarkan listener untuk event ini
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
