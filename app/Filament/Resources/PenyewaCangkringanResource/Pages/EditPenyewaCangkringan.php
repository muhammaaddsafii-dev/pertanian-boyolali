<?php

namespace App\Filament\Resources\PenyewaCangkringanResource\Pages;

use App\Filament\Resources\PenyewaCangkringanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaCangkringan extends EditRecord
{
    protected static string $resource = PenyewaCangkringanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
