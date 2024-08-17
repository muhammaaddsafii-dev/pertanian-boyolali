<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ERDKKResource\Pages;
use App\Filament\Resources\ERDKKResource\RelationManagers;
use App\Models\ERDKK;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ERDKKResource extends Resource
{
    protected static ?string $model = ERDKK::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Data Sekunder';

    protected static ?string $navigationLabel = 'ERDKK';

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
            'index' => Pages\ListERDKKS::route('/'),
            'create' => Pages\CreateERDKK::route('/create'),
            'edit' => Pages\EditERDKK::route('/{record}/edit'),
        ];
    }
}
