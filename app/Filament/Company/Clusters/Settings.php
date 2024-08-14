<?php

namespace App\Filament\Company\Clusters;

use Filament\Clusters\Cluster;

class Settings extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $title = 'Settings';

    public function getTitle(): string
    {
        return translate(static::$title);
    }

    public static function getNavigationLabel(): string
    {
        return translate(static::$title);
    }
}
