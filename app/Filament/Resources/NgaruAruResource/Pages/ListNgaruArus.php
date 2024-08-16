<?php

namespace App\Filament\Resources\NgaruAruResource\Pages;

use App\Filament\Resources\NgaruAruResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNgaruArus extends ListRecords
{
    protected static string $resource = NgaruAruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
