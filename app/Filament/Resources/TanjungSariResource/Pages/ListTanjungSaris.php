<?php

namespace App\Filament\Resources\TanjungSariResource\Pages;

use App\Filament\Resources\TanjungSariResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTanjungSaris extends ListRecords
{
    protected static string $resource = TanjungSariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
