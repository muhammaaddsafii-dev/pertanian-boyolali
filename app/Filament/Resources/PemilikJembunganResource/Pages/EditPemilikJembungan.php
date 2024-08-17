<?php

namespace App\Filament\Resources\PemilikJembunganResource\Pages;

use App\Filament\Resources\PemilikJembunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikJembungan extends EditRecord
{
    protected static string $resource = PemilikJembunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
