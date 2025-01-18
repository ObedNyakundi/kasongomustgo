<?php

namespace App\Filament\Resources\ResponsibilityResource\Pages;

use App\Filament\Resources\ResponsibilityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResponsibility extends EditRecord
{
    protected static string $resource = ResponsibilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
