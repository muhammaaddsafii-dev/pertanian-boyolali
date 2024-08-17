<?php

namespace App\Filament\Resources\PenggarapResource\Pages;

use App\Filament\Resources\PenggarapBangakResource;
use App\Filament\Resources\PenggarapResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms;
use Filament\Pages\Actions\ButtonAction;

class ListPenggaraps extends ListRecords
{
    protected static string $resource = PenggarapResource::class;

    public function mount(): void
    {
        $this->redirect(PenggarapBangakResource::getUrl('index'));
    }

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
                        'bangak' => 'PemilikBangakResource',
                        'banyudono' => 'PemilikBanyudonoResource',
                        'batan' => 'PemilikBatanResource',
                        'cangkringan' => 'PemilikCangkringanResource',
                        'denggungan' => 'PenmilikDenggunganResource',
                        'dukuh' => 'PemilikDukuhResource',
                        'jembungan' => 'PemilikJembunganResource',
                        'jipangan' => 'PemilikJipanganResource',
                        'ketaon' => 'PemilikKetaonResource',
                        'kuwran' => 'PemilikKuwranResource',
                        'ngaru-aru' => 'PemilikNgaruAruResource',
                        'sambon' => 'PemilikSambonResource',
                        'tanjungsari' => 'PemilikTanjungSariResource',
                        'trayu' => 'PemilikTrayuResource',
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
