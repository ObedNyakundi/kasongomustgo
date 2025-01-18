<?php

namespace App\Filament\Resources\ResponsibilityResource\Pages;

use App\Filament\Resources\ResponsibilityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResponsibilities extends ListRecords
{
    protected static string $resource = ResponsibilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
