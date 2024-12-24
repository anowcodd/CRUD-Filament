<?php

namespace App\Filament\Resources\DosenResource\Pages;

use App\Models\Dosen;
use Filament\Pages\Page;

class DosenReport extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static string $view = 'filament.pages.dosen-report';

    // Pastikan method render sesuai dengan tipe return yang diharapkan
    public function render(): \Illuminate\Contracts\View\View
    {
        $dosens = Dosen::all();
        return view('filament.pages.dosen-report', compact('dosens'));
    }
}

