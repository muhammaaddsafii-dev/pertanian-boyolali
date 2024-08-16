<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrayuResource\Pages;
use App\Filament\Resources\TrayuResource\RelationManagers;
use App\Models\Trayu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrayuResource extends Resource
{
    protected static ?string $model = Trayu::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Trayu';

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
            'index' => Pages\ListTrayus::route('/'),
            'create' => Pages\CreateTrayu::route('/create'),
            'edit' => Pages\EditTrayu::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Trayu');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Trayu');
    }
}
