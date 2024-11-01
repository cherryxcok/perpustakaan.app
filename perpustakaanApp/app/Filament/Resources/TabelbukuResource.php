<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TabelbukuResource\Pages;
use App\Filament\Resources\TabelbukuResource\RelationManagers;
use App\Models\Tabelbuku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TabelbukuResource extends Resource
{
    protected static ?string $model = Tabelbuku::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('judul_buku')
                ->label('Judul Buku')
                ->required()
                ->maxLength(100),
            Forms\Components\TextInput::make('penulis')
                ->label('Penulis')
                ->required()
                ->maxLength(50),
            Forms\Components\TextInput::make('penerbit')
                ->label('Penerbit')
                ->required()
                ->maxLength(50),
            Forms\Components\TextInput::make('tahun_terbit')
                ->label('Tahun Terbit')
                ->numeric()
                ->required(),
            Forms\Components\TextInput::make('jumlah_stok_buku')
                ->label('Jumlah Stok Buku')
                ->numeric()
                ->required(),                  
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul_buku')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('penulis')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('penerbit')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tahun_terbit')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('judul_stok_buku')->sortable()->searchable(),
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
            'index' => Pages\ListTabelbukus::route('/'),
            'create' => Pages\CreateTabelbuku::route('/create'),
            'edit' => Pages\EditTabelbuku::route('/{record}/edit'),
        ];
    }
}
