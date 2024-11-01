<?php

namespace App\Filament\Resources\TabelbukuResource\Pages;

use App\Filament\Resources\TabelbukuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTabelbuku extends EditRecord
{
    protected static string $resource = TabelbukuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
