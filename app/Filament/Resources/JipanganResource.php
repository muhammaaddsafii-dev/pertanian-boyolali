<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JipanganResource\Pages;
use App\Filament\Resources\JipanganResource\RelationManagers;
use App\Models\Jipangan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JipanganResource extends Resource
{
    protected static ?string $model = Jipangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Jipangan';

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
            'index' => Pages\ListJipangans::route('/'),
            'create' => Pages\CreateJipangan::route('/create'),
            'edit' => Pages\EditJipangan::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Jipangan');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Jipangan');
    }
}
