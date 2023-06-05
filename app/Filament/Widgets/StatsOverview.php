<?php

namespace App\Filament\Widgets;

use App\Models\Claim;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $chaim=Claim::count();
        return [
            // Card::make('Nombre de sinistre déclaré', '192.1k'),
            Card::make('Nombre de sinistre déclaré', "$chaim")
                ->description('En temps réel')
                ->chart([200, 200, 200, 200, 200, 200, 200])
                ->color('success'),
        ];
    }
}
