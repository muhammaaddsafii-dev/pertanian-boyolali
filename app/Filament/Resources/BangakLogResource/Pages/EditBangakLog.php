<?php

namespace App\Filament\Resources\BangakLogResource\Pages;

use App\Filament\Resources\BangakLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBangakLog extends EditRecord
{
    protected static string $resource = BangakLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
