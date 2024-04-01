<?php

namespace App\Filament\Resources\CompanyprojectResource\Pages;

use App\Filament\Resources\CompanyprojectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyproject extends EditRecord
{
    protected static string $resource = CompanyprojectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
