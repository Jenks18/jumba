<?php

namespace App\Filament\Resources\BuildingownerResource\Pages;

use App\Filament\Resources\BuildingownerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBuildingowners extends ListRecords
{
    protected static string $resource = BuildingownerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
