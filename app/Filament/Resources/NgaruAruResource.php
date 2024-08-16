<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NgaruAruResource\Pages;
use App\Filament\Resources\NgaruAruResource\RelationManagers;
use App\Models\NgaruAru;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NgaruAruResource extends Resource
{
    protected static ?string $model = NgaruAru::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Ngaru-Aru';

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
            'index' => Pages\ListNgaruArus::route('/'),
            'create' => Pages\CreateNgaruAru::route('/create'),
            'edit' => Pages\EditNgaruAru::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Ngaru-Aru');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Ngaru-Aru');
    }
}
