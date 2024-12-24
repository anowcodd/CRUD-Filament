<?php

namespace App\Filament\Pages;

use App\Models\Makul;
use Filament\Pages\Page;

class MakulReport extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static string $view = 'filament.pages.makul-report';

    public function render(): \Illuminate\Contracts\View\View
    {
        // Mengambil semua data makul
        $makuls = Makul::all();
        
        // Mengirim data ke view
        return view('filament.pages.makul-report', compact('makuls'));
    }
}
