<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DosenResource\Pages;
use App\Models\Dosen;
use Filament\Forms;
use Filament\Resources\Form;  // Pernyataan use yang benar
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Form as FormsForm; // Anda bisa memberi alias agar lebih jelas

class DosenResource extends Resource
{
    protected static ?string $model = Dosen::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')->required(),
            Forms\Components\TextInput::make('nip')->required(),
            Forms\Components\TextInput::make('email')->required()->email(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nip')->sortable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
            ])
            ->filters([])
            ->actions([])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDosens::route('/'),
            'create' => Pages\CreateDosen::route('/create'),
            'edit' => Pages\EditDosen::route('/{record}/edit'),
        ];
    }
}
