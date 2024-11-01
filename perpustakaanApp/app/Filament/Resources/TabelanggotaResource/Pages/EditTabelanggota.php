<?php

namespace App\Filament\Resources\TabelanggotaResource\Pages;

use App\Filament\Resources\TabelanggotaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTabelanggota extends EditRecord
{
    protected static string $resource = TabelanggotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
