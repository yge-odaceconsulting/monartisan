<?php

namespace App\Filament\Resources\ClaimResource\Pages;

use App\Filament\Resources\ClaimResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClaims extends ListRecords
{
    protected static string $resource = ClaimResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
