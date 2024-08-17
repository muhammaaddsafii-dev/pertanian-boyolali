<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DenggunganResource\Pages;
use App\Filament\Resources\DenggunganResource\RelationManagers;
use App\Models\Denggungan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DenggunganResource extends Resource
{
    protected static ?string $model = Denggungan::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Denggungan';

    protected static ?string $navigationGroup = 'Data Desa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('KECAMATAN')->label('Kecamatan')->nullable(),
                Forms\Components\TextInput::make('DESA')->label('Desa')->nullable(),
                Forms\Components\TextInput::make('DNOP')->label('DNOP')->nullable(),
                Forms\Components\Select::make('PL')
                    ->label('Penggunaan Lahan')
                    ->options([
                        'BANGUNAN' => 'BANGUNAN',
                        'SAWAH' => 'SAWAH',
                        'TANAMAN CAMPURAN' => 'TANAMAN CAMPURAN',
                        'TEGALAN' => 'TEGALAN',
                        'URUGAN' => 'URUGAN',
                    ])
                    ->nullable(),
                Forms\Components\TextInput::make('ERDKK')->label('ERDKK')->nullable(),
                Forms\Components\TextInput::make('NIK_1')->label('NIK 1')->nullable(),
                Forms\Components\TextInput::make('ALMT_1')->label('Alamat 1')->nullable(),
                Forms\Components\TextInput::make('PMLK')->label('Pemilik')->nullable(),
                Forms\Components\TextInput::make('NIK_2')->label('NIK 2')->nullable(),
                Forms\Components\TextInput::make('ALMT_2')->label('Alamat 2')->nullable(),
                Forms\Components\TextInput::make('PGRP')->label('Penggarap')->nullable(),
                Forms\Components\TextInput::make('NIK_3')->label('NIK 3')->nullable(),
                Forms\Components\TextInput::make('ALMT_3')->label('Alamat 3')->nullable(),
                Forms\Components\TextInput::make('PNYW')->label('Penyewa')->nullable(),
                Forms\Components\TextInput::make('NIK_4')->label('NIK 4')->nullable(),
                Forms\Components\TextInput::make('ALMT_4')->label('Alamat 4')->nullable(),
                Forms\Components\TextInput::make('KL_TN')->label('Kelas Tanah')->nullable(),
                Forms\Components\TextInput::make('BLOK')->label('Blok')->nullable(),
                Forms\Components\Select::make('JBTN')
                    ->label('Jabatan')
                    ->options([
                        'KETUA' => 'KETUA',
                        'SEKRETARIS' => 'SEKRETARIS',
                        'BENDAHARA' => 'BENDAHARA',
                        'ANGGOTA' => 'ANGGOTA',
                    ])
                    ->nullable(),
                Forms\Components\TextInput::make('JML_PTK')->label('Jumlah Petani')->nullable(),
                Forms\Components\Select::make('SB_PPK')
                    ->label('Sumber Pupuk')
                    ->options([
                        'SUBSIDI' => 'SUBSIDI',
                        'NON-SUBSIDI' => 'NON-SUBSIDI',
                    ])
                    ->nullable(),
                Forms\Components\TextInput::make('ALSTN')->label('Alat dan Mesin')->nullable(),
                Forms\Components\Select::make('SMBR_AIR')
                    ->label('Sumber Air')
                    ->options([
                        'IRIGASI' => 'IRIGASI',
                        'TANDAH HUJAN' => 'TANDAH HUJAN',
                    ])
                    ->nullable(),
                Forms\Components\TextInput::make('N_DI')->label('Nama DI')->nullable(),
                Forms\Components\Select::make('KOM_MT1')
                    ->label('Komoditas MT1')
                    ->options([
                        'HORTIKULTURA' => 'HORTIKULTURA',
                        'JAGUNG' => 'JAGUNG',
                        'PADI' => 'PADI',
                        'PALAWIJA' => 'PALAWIJA',
                        'TEMBAKAU' => 'TEMBAKAU',
                        'BERO' => 'BERO',
                    ])
                    ->nullable(),
                Forms\Components\Select::make('KOM_MT2')
                    ->label('Komoditas MT2')
                    ->options([
                        'HORTIKULTURA' => 'HORTIKULTURA',
                        'JAGUNG' => 'JAGUNG',
                        'PADI' => 'PADI',
                        'PALAWIJA' => 'PALAWIJA',
                        'TEMBAKAU' => 'TEMBAKAU',
                        'BERO' => 'BERO',
                    ])
                    ->nullable(),
                Forms\Components\Select::make('KOM_MT3')
                    ->label('Komoditas MT3')
                    ->options([
                        'HORTIKULTURA' => 'HORTIKULTURA',
                        'JAGUNG' => 'JAGUNG',
                        'PADI' => 'PADI',
                        'PALAWIJA' => 'PALAWIJA',
                        'TEMBAKAU' => 'TEMBAKAU',
                        'BERO' => 'BERO',
                    ])
                    ->nullable(),
                Forms\Components\TextInput::make('WT_MT1')->label('Waktu MT1')->nullable(),
                Forms\Components\TextInput::make('WT_MT2')->label('Waktu MT2')->nullable(),
                Forms\Components\TextInput::make('WT_MT3')->label('Waktu MT3')->nullable(),
                Forms\Components\TextInput::make('PR_MT1')->label('Produksi MT1')->numeric()->nullable(),
                Forms\Components\TextInput::make('PR_MT2')->label('Produksi MT2')->numeric()->nullable(),
                Forms\Components\TextInput::make('PR_MT3')->label('Produksi MT3')->numeric()->nullable(),
                Forms\Components\TextInput::make('LUAS')->label('Luas')->numeric()->nullable(),
                Forms\Components\Textarea::make('geometry')->label('Geometry')->nullable(),
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
                Tables\Columns\TextColumn::make('DNOP')
                    ->label('DNOP')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('PL')
                    ->label('Penggunaan Lahan')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('ERDKK')
                    ->label('ERDKK')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('NIK_1')
                    ->label('NIK Pemilik')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('ALMT_1')
                    ->label('Alamat Pemilik')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('PMLK')
                    ->label('Pemilik')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('NIK_2')
                    ->label('NIK Anggota 1')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('ALMT_2')
                    ->label('Alamat Anggota 1')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('PGRP')
                    ->label('Penggarap')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('NIK_3')
                    ->label('NIK Anggota 2')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('ALMT_3')
                    ->label('Alamat Anggota 2')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('PNYW')
                    ->label('Penyewa')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('NIK_4')
                    ->label('NIK Anggota 3')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('ALMT_4')
                    ->label('Alamat Anggota 3')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('KL_TN')
                    ->label('Kelompok Tani')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('BLOK')
                    ->label('Blok')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('JBTN')
                    ->label('Jabatan')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('JML_PTK')
                    ->label('Jumlah Petak')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('SB_PPK')
                    ->label('Status Bantuan')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('ALSTN')
                    ->label('Alat Satuan')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('SMBR_AIR')
                    ->label('Sumber Air')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('N_DI')
                    ->label('Nomor DI')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('KOM_MT1')
                    ->label('Komoditas MT1')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('KOM_MT2')
                    ->label('Komoditas MT2')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('KOM_MT3')
                    ->label('Komoditas MT3')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('WT_MT1')
                    ->label('Waktu Tanam MT1')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('WT_MT2')
                    ->label('Waktu Tanam MT2')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('WT_MT3')
                    ->label('Waktu Tanam MT3')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('PR_MT1')
                    ->label('Produksi MT1')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('PR_MT2')
                    ->label('Produksi MT2')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('PR_MT3')
                    ->label('Produksi MT3')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('LUAS')
                    ->label('Luas')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('geometry')
                    ->label('Geometry')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDenggungans::route('/'),
            'create' => Pages\CreateDenggungan::route('/create'),
            'edit' => Pages\EditDenggungan::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Denggungan');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Denggungan');
    }

    protected static bool $shouldRegisterNavigation = false;
}
