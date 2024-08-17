<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KelompokTaniDukuhResource\Pages;
use App\Filament\Resources\KelompokTaniDukuhResource\RelationManagers;
use App\Models\KelompokTaniDukuh;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KelompokTaniDukuhResource extends Resource
{
    protected static ?string $model = KelompokTaniDukuh::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('KL_TN')->label('Kelompok Tani')->nullable(),
                Forms\Components\TextInput::make('BLOK')->label('Blok')->nullable(),
                Forms\Components\TextInput::make('JBTN')->label('Jabatan')->nullable(),
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
                Tables\Columns\TextColumn::make('KL_TN')
                    ->label('Kelompok Tani')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('BLOK')
                    ->label('Blok')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('JBTN')
                    ->label('Jabatan')
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
            'index' => Pages\ListKelompokTaniDukuhs::route('/'),
            'create' => Pages\CreateKelompokTaniDukuh::route('/create'),
            'edit' => Pages\EditKelompokTaniDukuh::route('/{record}/edit'),
        ];
    }

    protected static bool $shouldRegisterNavigation = false;
}
