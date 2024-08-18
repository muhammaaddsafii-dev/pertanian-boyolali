<?php

namespace App\Filament\Resources\PenggarapTrayuResource\Pages;

use App\Filament\Resources\PenggarapTrayuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms;
use Filament\Pages\Actions\ButtonAction;

class ListPenggarapTrayus extends ListRecords
{
    protected static string $resource = PenggarapTrayuResource::class;

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
                        'bangak' => 'PenggarapBangakResource',
                        'banyudono' => 'PenggarapBanyudonoResource',
                        'batan' => 'PenggarapBatanResource',
                        'cangkringan' => 'PenggarapCangkringanResource',
                        'denggungan' => 'PenggarapDenggunganResource',
                        'dukuh' => 'PenggarapDukuhResource',
                        'jembungan' => 'PenggarapJembunganResource',
                        'jipangan' => 'PenggarapJipanganResource',
                        'ketaon' => 'PenggarapKetaonResource',
                        'kuwran' => 'PenggarapKuwranResource',
                        'ngaru-aru' => 'PenggarapNgaruAruResource',
                        'sambon' => 'PenggarapSambonResource',
                        'tanjungsari' => 'PenggarapTanjungSariResource',
                        'trayu' => 'PenggarapTrayuResource',
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
