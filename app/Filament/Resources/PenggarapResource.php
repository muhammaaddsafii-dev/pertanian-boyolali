<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenggarapResource\Pages;
use App\Filament\Resources\PenggarapResource\RelationManagers;
use App\Models\Penggarap;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenggarapResource extends Resource
{
    protected static ?string $model = Penggarap::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    protected static ?string $navigationGroup = 'Data Sekunder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenggaraps::route('/'),
            'create' => Pages\CreatePenggarap::route('/create'),
            'edit' => Pages\EditPenggarap::route('/{record}/edit'),
        ];
    }

}
