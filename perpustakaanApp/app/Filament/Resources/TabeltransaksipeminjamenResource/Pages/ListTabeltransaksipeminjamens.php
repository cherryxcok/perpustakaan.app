<?php

namespace App\Filament\Resources\TabeltransaksipeminjamenResource\Pages;

use App\Filament\Resources\TabeltransaksipeminjamenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTabeltransaksipeminjamens extends ListRecords
{
    protected static string $resource = TabeltransaksipeminjamenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
