<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MakulResource\Pages;
use App\Models\Makul;
use Filament\Forms;
use Filament\Resources\Form;  // Gunakan yang benar
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Resources\Table;

class MakulResource extends Resource
{
    protected static ?string $model = Makul::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')->required(),
            Forms\Components\TextInput::make('kode')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode')->sortable(),
            ])
            ->filters([])
            ->actions([])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMakuls::route('/'),
            'create' => Pages\CreateMakul::route('/create'),
            'edit' => Pages\EditMakul::route('/{record}/edit'),
        ];
    }
}

