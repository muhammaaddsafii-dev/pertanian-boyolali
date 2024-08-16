<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KetaonResource\Pages;
use App\Filament\Resources\KetaonResource\RelationManagers;
use App\Models\Ketaon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KetaonResource extends Resource
{
    protected static ?string $model = Ketaon::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Ketaon';

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
            'index' => Pages\ListKetaons::route('/'),
            'create' => Pages\CreateKetaon::route('/create'),
            'edit' => Pages\EditKetaon::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Ketaon');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Ketaon');
    }
}
