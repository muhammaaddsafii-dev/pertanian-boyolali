<?php

namespace App\Filament\Resources\BangakResource\Pages;

use App\Filament\Resources\BangakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBangak extends EditRecord
{
    protected static string $resource = BangakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
