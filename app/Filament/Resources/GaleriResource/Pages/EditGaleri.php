<?php

namespace App\Filament\Resources\GaleriResource\Pages;

use App\Filament\Resources\GaleriResource;
use App\Models\galeri;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditGaleri extends EditRecord
{
    protected static string $resource = GaleriResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (galeri $record){
                   if($record->img) {
                    Storage::disk('public')->delete($record->img);
                   } 
                }
            ),
        ];
    }
}
