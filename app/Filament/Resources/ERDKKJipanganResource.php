<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ERDKKJipanganResource\Pages;
use App\Filament\Resources\ERDKKJipanganResource\RelationManagers;
use App\Models\ERDKKJipangan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ERDKKJipanganResource extends Resource
{
    protected static ?string $model = ERDKKJipangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ERDKK')->label('ERDKK')->nullable(),
                Forms\Components\TextInput::make('NIK_1')->label('NIK ERDKK')->nullable(),
                Forms\Components\TextInput::make('ALMT_1')->label('Alamat ERDKK')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('KECAMATAN')
                    ->name('KECAMATAN')
                    ->label('Kecamatan')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('DESA')
                    ->label('Desa')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('ERDKK')
                    ->label('ERDKK')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('NIK_1')
                    ->label('NIK ERDKK')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('ALMT_1')
                    ->label('Alamat ERDKK')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
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
            'index' => Pages\ListERDKKJipangans::route('/'),
            'create' => Pages\CreateERDKKJipangan::route('/create'),
            'edit' => Pages\EditERDKKJipangan::route('/{record}/edit'),
        ];
    }

    protected static bool $shouldRegisterNavigation = false;

    public static function getModelLabel(): string
    {
        return __('ERDKK Jipangan');
    }

    public static function getPluralModelLabel(): string
    {
        return __('ERDKK Jipangan');
    }
}
