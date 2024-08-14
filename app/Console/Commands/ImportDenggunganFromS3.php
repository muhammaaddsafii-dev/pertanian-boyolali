<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Denggungan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ImportDenggunganFromS3 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import-denggungan';
    protected $description = 'Import DENGGUNGAN data from DENGGUNGAN.geojson';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = 'pertanian-boyolali/geojson-files/DENGGUNGAN.geojson';

        // Check if the file exists
        if (!Storage::disk('s3')->exists($path)) {
            $this->error("File not found: {$path}");
            Log::error("File not found: {$path}");
            return 1;
        }

        // Get the file contents
        $json = Storage::disk('s3')->get($path);
        if ($json === false) {
            $this->error("Failed to read file: {$path}");
            Log::error("Failed to read file: {$path}");
            return 1;
        }

        // Decode the JSON
        $data = json_decode($json, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->error("Invalid JSON data in file: {$path}");
            Log::error("Invalid JSON data in file: {$path}");
            return 1;
        }

        // Process the data as needed
        // Example: iterate over each feature and store in the database
        foreach ($data['features'] as $feature) {
            $attributes = $feature['properties'];

            Denggungan::updateOrCreate(
                ['DNOP' => $attributes['DNOP']], // Assuming 'id' is a unique identifier
                $attributes
            );
        }

        $this->info("Data imported successfully from {$path}");
        Log::info("Data imported successfully from {$path}");

        return 0;
    }
}
