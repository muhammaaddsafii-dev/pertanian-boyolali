<?php

namespace App\Filament\Resources\BatanResource\Pages;

use App\Filament\Resources\BatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBatan extends EditRecord
{
    protected static string $resource = BatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
