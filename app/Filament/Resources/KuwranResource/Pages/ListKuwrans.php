<?php

namespace App\Filament\Resources\KuwranResource\Pages;

use App\Filament\Resources\KuwranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Actions\ButtonAction;
use Filament\Forms;

class ListKuwrans extends ListRecords
{
    protected static string $resource = KuwranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ButtonAction::make('selectResource')
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
}
