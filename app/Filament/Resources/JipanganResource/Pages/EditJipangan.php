<?php

namespace App\Filament\Resources\JipanganResource\Pages;

use App\Filament\Resources\JipanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJipangan extends EditRecord
{
    protected static string $resource = JipanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
