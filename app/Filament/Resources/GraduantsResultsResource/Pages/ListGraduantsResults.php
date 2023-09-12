<?php

namespace App\Filament\Resources\GraduantsResultsResource\Pages;

use App\Filament\Resources\GraduantsResultsResource;
use App\Imports\GraduantsResultsImport;
use App\Models\GraduantsResults;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class ListGraduantsResults extends ListRecords
{
    protected static string $resource = GraduantsResultsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }

    public function getHeader(): View
    {
        return view('pages.filament.uploadfile');
    }

    public $file;

    public function save()
    {
        
        if($this->file != ''){

            GraduantsResults::truncate();

            Excel::import(new GraduantsResultsImport, $this->file);
        }
    }
}
