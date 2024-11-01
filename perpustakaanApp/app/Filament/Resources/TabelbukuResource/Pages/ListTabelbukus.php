<?php

namespace App\Filament\Resources\TabelbukuResource\Pages;

use App\Filament\Resources\TabelbukuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTabelbukus extends ListRecords
{
    protected static string $resource = TabelbukuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
