<?php

namespace App\Filament\Resources\ProfileResource\Pages;

use App\Filament\Resources\ProfileResource;
use App\Models\profile;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditProfile extends EditRecord
{
    protected static string $resource = ProfileResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after( 
                function(profile $record) {
                    if($record->img){
                        Storage::disk('public')->delete($record->img);
                    }
                }),
        ];
    }
}
