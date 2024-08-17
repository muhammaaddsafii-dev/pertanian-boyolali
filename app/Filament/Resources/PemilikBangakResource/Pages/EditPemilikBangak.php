<?php

namespace App\Filament\Resources\PemilikBangakResource\Pages;

use App\Filament\Resources\PemilikBangakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikBangak extends EditRecord
{
    protected static string $resource = PemilikBangakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
