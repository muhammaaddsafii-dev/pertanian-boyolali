<?php

namespace App\Filament\Resources\ERDKKBangakResource\Pages;

use App\Filament\Resources\ERDKKBangakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKBangak extends EditRecord
{
    protected static string $resource = ERDKKBangakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
