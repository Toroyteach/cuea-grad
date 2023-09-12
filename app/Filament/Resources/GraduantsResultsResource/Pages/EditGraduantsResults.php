<?php

namespace App\Filament\Resources\GraduantsResultsResource\Pages;

use App\Filament\Resources\GraduantsResultsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGraduantsResults extends EditRecord
{
    protected static string $resource = GraduantsResultsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\DeleteAction::make(),
        ];
    }
}
