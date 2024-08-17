<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenyewaJembunganResource\Pages;
use App\Filament\Resources\PenyewaJembunganResource\RelationManagers;
use App\Models\PenyewaJembungan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenyewaJembunganResource extends Resource
{
    protected static ?string $model = PenyewaJembungan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('PNYW')->label('Penyewa')->nullable(),
                Forms\Components\TextInput::make('NIK_4')->label('NIK Penyewa')->nullable(),
                Forms\Components\TextInput::make('ALMT_4')->label('Alamat Penyewa')->nullable(),
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
                Tables\Columns\TextColumn::make('PNYW')
                    ->label('Penyewa')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('NIK_4')
                    ->label('NIK Penyewa')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('ALMT_4')
                    ->label('Alamat Penyewa')
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
            'index' => Pages\ListPenyewaJembungans::route('/'),
            'create' => Pages\CreatePenyewaJembungan::route('/create'),
            'edit' => Pages\EditPenyewaJembungan::route('/{record}/edit'),
        ];
    }

    protected static bool $shouldRegisterNavigation = false;
}
