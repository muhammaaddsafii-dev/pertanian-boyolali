<?php

namespace App\Filament\Resources\LogResource\Pages;

use App\Filament\Resources\BangakLogResource;
use App\Filament\Resources\LogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms;
use Filament\Pages\Actions\ButtonAction;

class ListLogs extends ListRecords
{
    protected static string $resource = LogResource::class;

    public function mount(): void
    {
        $this->redirect(BangakLogResource::getUrl('index'));
    }

    protected function getHeaderActions(): array
    {
        return [
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
