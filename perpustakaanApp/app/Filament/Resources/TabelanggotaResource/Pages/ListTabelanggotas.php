<?php

namespace App\Filament\Resources\TabelanggotaResource\Pages;

use App\Filament\Resources\TabelanggotaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTabelanggotas extends ListRecords
{
    protected static string $resource = TabelanggotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
