<?php

namespace App\Filament\Resources\B2bResource\Pages;

use App\Filament\Resources\B2bResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListB2bs extends ListRecords
{
    protected static string $resource = B2bResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
