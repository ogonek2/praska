<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;

    protected function handleRecordCreation(array $data): \Illuminate\Database\Eloquent\Model
    {
        $groups = $data['groups'] ?? [];
        $categories = $data['categories'] ?? [];
        unset($data['groups'], $data['categories']);
        
        $record = static::getModel()::create($data);
        $record->groups()->sync($groups);
        $record->categories()->sync($categories);
        
        return $record;
    }
}
