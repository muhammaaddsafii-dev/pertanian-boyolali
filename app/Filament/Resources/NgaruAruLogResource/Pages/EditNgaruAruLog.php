<?php

namespace App\Filament\Resources\NgaruAruLogResource\Pages;

use App\Filament\Resources\NgaruAruLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNgaruAruLog extends EditRecord
{
    protected static string $resource = NgaruAruLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
