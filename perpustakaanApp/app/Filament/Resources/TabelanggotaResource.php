<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TabelanggotaResource\Pages;
use App\Filament\Resources\TabelanggotaResource\RelationManagers;
use App\Models\Tabelanggota;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TabelanggotaResource extends Resource
{
    protected static ?string $model = Tabelanggota::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama')
                    ->required(),            
                Forms\Components\TextInput::make('alamat')
                    ->label('Alamat')
                    ->required(),               
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->numeric()
                    ->maxLength(100),               
                Forms\Components\TextInput::make('nomor_telepon')
                    ->label('Nomor Telepon')
                    ->required(),    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('alamat')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nomor_telepon')->sortable()->searchable(),
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
            'index' => Pages\ListTabelanggotas::route('/'),
            'create' => Pages\CreateTabelanggota::route('/create'),
            'edit' => Pages\EditTabelanggota::route('/{record}/edit'),
        ];
    }
}
