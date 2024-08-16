<?php

namespace App\Filament\Resources\BangakResource\Pages;

use App\Filament\Resources\BangakResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBangaks extends ListRecords
{
    protected static string $resource = BangakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
