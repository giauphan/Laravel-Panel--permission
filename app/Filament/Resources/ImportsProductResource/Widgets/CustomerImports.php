<?php

namespace App\Filament\Resources\ImportsProductResource\Widgets;

use App\Filament\Resources\ImportsProductResource\Pages\ListImportsProducts;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CustomerImports extends BaseWidget
{
    use InteractsWithPageTable;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Products', $this->getPageTableQuery()->count()),
            Stat::make('Bounce rate', '21%'),
            Stat::make('Average time on page', '3:12'),
        ];
    }

    protected function getTablePage(): string
    {
        return ListImportsProducts::class;
    }
}
