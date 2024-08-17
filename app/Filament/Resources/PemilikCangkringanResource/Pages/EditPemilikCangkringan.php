<?php

namespace App\Filament\Resources\PemilikCangkringanResource\Pages;

use App\Filament\Resources\PemilikCangkringanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikCangkringan extends EditRecord
{
    protected static string $resource = PemilikCangkringanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
