<?php

namespace App\Filament\Resources\ERDKKJipanganResource\Pages;

use App\Filament\Resources\ERDKKJipanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKJipangan extends EditRecord
{
    protected static string $resource = ERDKKJipanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
