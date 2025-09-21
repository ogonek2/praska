<?php

namespace App\Filament\Resources\B2bResource\Pages;

use App\Filament\Resources\B2bResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditB2b extends EditRecord
{
    protected static string $resource = B2bResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
