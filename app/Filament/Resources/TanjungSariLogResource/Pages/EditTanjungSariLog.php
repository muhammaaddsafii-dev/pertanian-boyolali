<?php

namespace App\Filament\Resources\TanjungSariLogResource\Pages;

use App\Filament\Resources\TanjungSariLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTanjungSariLog extends EditRecord
{
    protected static string $resource = TanjungSariLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
