<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getActions(): array
    {
        $actions = [];

        // Kullanıcı rolü
        if (auth()->user()->roles == 2) {
            $actions[] = Actions\DeleteAction::make();
        }

        return $actions;
    }

}
