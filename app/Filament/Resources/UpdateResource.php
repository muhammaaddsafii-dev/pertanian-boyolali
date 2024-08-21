<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UpdateResource\Pages;
use App\Filament\Resources\UpdateResource\RelationManagers;
use App\Models\Update;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class UpdateResource extends Resource
{
    protected static ?string $model = Update::class;

    protected static ?string $navigationLabel = 'Update';

    protected static ?string $navigationGroup = 'Update Data Tahunan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('description')->label('Description')->nullable(),
                FileUpload::make('geojson_file')
                    ->label('Upload GeoJSON File')
                    ->disk('s3')
                    ->directory('pertanian-boyolali/geojson-files')
                    ->preserveFilenames()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
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
            'index' => Pages\ListUpdates::route('/'),
            'create' => Pages\CreateUpdate::route('/create'),
            'edit' => Pages\EditUpdate::route('/{record}/edit'),
        ];
    }
}
