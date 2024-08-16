<?php

namespace App\Filament\Resources\NgaruAruResource\Pages;

use App\Filament\Resources\NgaruAruResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNgaruAru extends EditRecord
{
    protected static string $resource = NgaruAruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
