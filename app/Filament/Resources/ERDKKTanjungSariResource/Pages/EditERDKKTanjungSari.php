<?php

namespace App\Filament\Resources\ERDKKTanjungSariResource\Pages;

use App\Filament\Resources\ERDKKTanjungSariResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditERDKKTanjungSari extends EditRecord
{
    protected static string $resource = ERDKKTanjungSariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
