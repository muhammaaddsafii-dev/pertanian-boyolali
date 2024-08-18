<?php

namespace App\Filament\Resources\KelompokTaniKuwranResource\Pages;

use App\Filament\Resources\KelompokTaniKuwranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms;
use Filament\Pages\Actions\ButtonAction;

class ListKelompokTaniKuwrans extends ListRecords
{
    protected static string $resource = KelompokTaniKuwranResource::class;

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
                        'bangak' => 'KelompokTaniBangakResource',
                        'banyudono' => 'KelompokTaniBanyudonoResource',
                        'batan' => 'KelompokTaniBatanResource',
                        'cangkringan' => 'KelompokTaniCangkringanResource',
                        'denggungan' => 'KelompokTaniDenggunganResource',
                        'dukuh' => 'KelompokTaniDukuhResource',
                        'jembungan' => 'KelompokTaniJembunganResource',
                        'jipangan' => 'KelompokTaniJipanganResource',
                        'ketaon' => 'KelompokTaniKetaonResource',
                        'kuwran' => 'KelompokTaniKuwranResource',
                        'ngaru-aru' => 'KelompokTaniNgaruAruResource',
                        'sambon' => 'KelompokTaniSambonResource',
                        'tanjungsari' => 'KelompokTaniTanjungSariResource',
                        'trayu' => 'KelompokTaniTrayuResource',
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
