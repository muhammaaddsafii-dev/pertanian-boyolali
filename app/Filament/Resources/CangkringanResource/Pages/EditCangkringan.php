<?php

namespace App\Filament\Resources\CangkringanResource\Pages;

use App\Filament\Resources\CangkringanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCangkringan extends EditRecord
{
    protected static string $resource = CangkringanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
