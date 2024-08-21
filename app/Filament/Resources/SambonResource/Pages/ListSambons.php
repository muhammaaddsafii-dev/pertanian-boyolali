<?php

namespace App\Filament\Resources\SambonResource\Pages;

use App\Exports\SambonExport;
use App\Filament\Resources\SambonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Actions\ButtonAction;
use Filament\Forms;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Artisan;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class ListSambons extends ListRecords
{
    protected static string $resource = SambonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ButtonAction::make('importSambon')
                ->label('Import Sambon')
                ->action('importSambon')
                ->icon('heroicon-o-arrow-path')
                ->color('danger'),
            ButtonAction::make('export')
                ->label('Excel')
                ->action('export')
                ->icon('heroicon-o-arrow-down-circle')
                ->color('success'),
            ButtonAction::make('downloadGeojson')
                ->label('GeoJSON')
                ->action('downloadGeojson')
                ->icon('heroicon-o-arrow-down-circle')
                ->color('info'),
            ButtonAction::make('selectResource')
                ->icon('heroicon-o-bars-4')
                ->label('Pilih Desa')
                ->form([
                    Forms\Components\Select::make('resource')
                        ->label('Pilih Desa')
                        ->options([
                            'bangak' => 'Bangak',
                            'banyudono' => 'Banyudono',
                            'batan' => 'Batan',
                            'cangkringan' => 'Cangkringan',
                            'denggungan' => 'Denggungan',
                            'dukuh' => 'Dukuh',
                            'jembungan' => 'Jembungan',
                            'jipangan' => 'Jipangan',
                            'ketaon' => 'Ketaon',
                            'kuwran' => 'Kuwran',
                            'ngaru-aru' => 'Ngaru-Aru',
                            'sambon' => 'Sambon',
                            'tanjungsari' => 'Tanjung Sari',
                            'trayu' => 'Trayu',
                        ])
                        ->default('bangak'), // Set default to Bangak
                ])
                ->action(function (array $data) {
                    $resourceMap = [
                        'bangak' => 'BangakResource',
                        'banyudono' => 'BanyudonoResource',
                        'batan' => 'BatanResource',
                        'cangkringan' => 'CangkringanResource',
                        'denggungan' => 'DenggunganResource',
                        'dukuh' => 'DukuhResource',
                        'jembungan' => 'JembunganResource',
                        'jipangan' => 'JipanganResource',
                        'ketaon' => 'KetaonResource',
                        'kuwran' => 'KuwranResource',
                        'ngaru-aru' => 'NgaruAruResource',
                        'sambon' => 'SambonResource',
                        'tanjungsari' => 'TanjungSariResource',
                        'trayu' => 'TrayuResource',
                    ];

                    $selectedResource = $data['resource'] ?? 'bangak'; // Use 'bangak' if no selection is made
                    $resourceClass = "App\\Filament\\Resources\\" . $resourceMap[$selectedResource];

                    if (class_exists($resourceClass)) {
                        $url = $resourceClass::getUrl('index');
                        return redirect($url);
                    }
                })
                ->modalHeading('Pilih Desa')
                ->modalButton('Pilih')
        ];
    }

    public function export()
    {
        return Excel::download(new SambonExport, 'sambon.xlsx');
    }

    public function downloadGeojson()
    {
        // S3 object key (path to the file in the bucket)
        $filePath = 'pertanian-boyolali/geojson-files/SAMBON.geojson';

        // The filename to be used for the downloaded file
        $fileName = 'SAMBON.geojson';

        // Get the file from S3
        $fileContent = Storage::disk('s3')->get($filePath);

        // Return the file as a download response
        return response()->streamDownload(function () use ($fileContent) {
            echo $fileContent;
        }, $fileName);
    }

    public function importSambon()
    {
        Artisan::call('import-sambon');

        // Optionally, you can return a success notification or redirect
        Notification::make()
            ->title('Import Selesai')
            ->body('Sambon berhasil diimport.')
            ->success()
            ->send();
    }
}
