<?php

namespace App\Filament\Resources\ERDKKCangkringanResource\Pages;

use App\Filament\Resources\ERDKKCangkringanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKCangkringan extends EditRecord
{
    protected static string $resource = ERDKKCangkringanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
