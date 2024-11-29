<?php

namespace App\Filament\Resources\BoardingHouseResource\Pages;

use App\Filament\Resources\BoardingHouseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBoardingHouses extends ListRecords
{
    protected static string $resource = BoardingHouseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
