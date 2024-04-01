<?php

namespace App\Filament\Resources\BuildingownerResource\Pages;

use App\Filament\Resources\BuildingownerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBuildingowner extends EditRecord
{
    protected static string $resource = BuildingownerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
