<?php

namespace App\Filament\Resources\PemilikTanjungSariResource\Pages;

use App\Filament\Resources\PemilikTanjungSariResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilikTanjungSari extends EditRecord
{
    protected static string $resource = PemilikTanjungSariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
