<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductResource::class;

    protected function getActions(): array
    {
        $actions = [];

        // Kullanıcı rolü
        if (auth()->user()->roles == 2) {
            $actions[] = Actions\CreateAction::make();
        }

        return $actions;
    }
}
