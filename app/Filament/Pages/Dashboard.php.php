<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page  // Pastikan nama kelas tanpa ekstensi .php
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Dashboards'; // Nama menu di sidebar
    // Ganti 'filament.pages.dashboard.php' menjadi 'filament.pages.dashboard'
    protected static string $view = 'filament.pages.dashboard';
}
