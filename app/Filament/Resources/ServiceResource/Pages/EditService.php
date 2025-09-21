<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $record = $this->record;
        $data['groups'] = $record->groups->pluck('id')->toArray();
        $data['categories'] = $record->categories->pluck('id')->toArray();
        return $data;
    }

    protected function handleRecordUpdate($record, array $data): \Illuminate\Database\Eloquent\Model
    {
        $groups = $data['groups'] ?? [];
        $categories = $data['categories'] ?? [];
        unset($data['groups'], $data['categories']);
        
        $record->update($data);
        $record->groups()->sync($groups);
        $record->categories()->sync($categories);
        
        return $record;
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
