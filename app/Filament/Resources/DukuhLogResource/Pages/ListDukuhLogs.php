<?php

namespace App\Filament\Resources\DukuhLogResource\Pages;

use App\Filament\Resources\DukuhLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms;
use Filament\Pages\Actions\ButtonAction;

class ListDukuhLogs extends ListRecords
{
    protected static string $resource = DukuhLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
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
                        'bangak' => 'BangakLogResource',
                        'banyudono' => 'BanyudonoLogResource',
                        'batan' => 'BatanLogResource',
                        'cangkringan' => 'CangkringanLogResource',
                        'denggungan' => 'DenggunganLogResource',
                        'dukuh' => 'DukuhLogResource',
                        'jembungan' => 'JembunganLogResource',
                        'jipangan' => 'JipanganLogResource',
                        'ketaon' => 'KetaonLogResource',
                        'kuwran' => 'KuwranLogResource',
                        'ngaru-aru' => 'NgaruAruLogResource',
                        'sambon' => 'SambonLogResource',
                        'tanjungsari' => 'TanjungSariLogResource',
                        'trayu' => 'TrayuLogResource',
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
}
