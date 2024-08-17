<?php

namespace App\Filament\Resources\PemilikJipanganResource\Pages;

use App\Filament\Resources\PemilikJipanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikJipangan extends EditRecord
{
    protected static string $resource = PemilikJipanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
