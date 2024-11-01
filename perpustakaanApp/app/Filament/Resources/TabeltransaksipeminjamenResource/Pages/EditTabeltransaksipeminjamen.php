<?php

namespace App\Filament\Resources\TabeltransaksipeminjamenResource\Pages;

use App\Filament\Resources\TabeltransaksipeminjamenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTabeltransaksipeminjamen extends EditRecord
{
    protected static string $resource = TabeltransaksipeminjamenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
