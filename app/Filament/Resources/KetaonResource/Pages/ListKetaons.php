<?php

namespace App\Filament\Resources\KetaonResource\Pages;

use App\Filament\Resources\KetaonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKetaons extends ListRecords
{
    protected static string $resource = KetaonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
