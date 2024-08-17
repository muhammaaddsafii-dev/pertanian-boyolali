<?php

namespace App\Filament\Resources\PenyewaBangakResource\Pages;

use App\Filament\Resources\PenyewaBangakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyewaBangak extends EditRecord
{
    protected static string $resource = PenyewaBangakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
