<?php

namespace App\Filament\Resources\TanjungSariResource\Pages;

use App\Filament\Resources\TanjungSariResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTanjungSari extends EditRecord
{
    protected static string $resource = TanjungSariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
