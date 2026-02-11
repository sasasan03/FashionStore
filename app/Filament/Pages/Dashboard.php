<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'ダッシュボード';
    protected static string | \UnitEnum | null $navigationGroup = '管理';

    protected static ?int $navigationSort = 1; // 上に出したいなら小さい数字

    protected string $view = 'filament.pages.dashboard';
}
