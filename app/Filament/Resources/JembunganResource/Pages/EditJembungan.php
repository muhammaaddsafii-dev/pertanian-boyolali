<?php

namespace App\Filament\Resources\JembunganResource\Pages;

use App\Filament\Resources\JembunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJembungan extends EditRecord
{
    protected static string $resource = JembunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
