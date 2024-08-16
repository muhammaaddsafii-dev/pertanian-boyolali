<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DukuhResource\Pages;
use App\Filament\Resources\DukuhResource\RelationManagers;
use App\Models\Dukuh;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DukuhResource extends Resource
{
    protected static ?string $model = Dukuh::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Dukuh';

    protected static ?string $navigationGroup = 'Data Desa';

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
            'index' => Pages\ListDukuhs::route('/'),
            'create' => Pages\CreateDukuh::route('/create'),
            'edit' => Pages\EditDukuh::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Dukuh');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Dukuh');
    }
}
