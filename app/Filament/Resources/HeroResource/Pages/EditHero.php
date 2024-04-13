<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\Resources\HeroResource;
use App\Models\hero;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditHero extends EditRecord
{
    protected static string $resource = HeroResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (hero $record){
                   if($record->img) {
                    Storage::disk('public')->delete($record->img);
                   } 
                }
            ),
        ];
    }
}
