<?php

namespace App\Filament\Resources\ERDKKJembunganResource\Pages;

use App\Filament\Resources\ERDKKJembunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKJembungan extends EditRecord
{
    protected static string $resource = ERDKKJembunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
