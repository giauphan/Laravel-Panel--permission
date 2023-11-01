<?php

namespace App\Filament\Pages;

use Filament\Panel;

class Dashboard extends \Filament\Pages\Dashboard
{
    protected static ?string $title = 'Finance dashboard';

    protected static string $routePath = 'finance';

    public function getColumns(): int|string|array
    {
        return 2;
    }

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->pages([]);
    }
}
