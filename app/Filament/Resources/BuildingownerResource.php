<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BuildingownerResource\Pages;
use App\Filament\Resources\BuildingownerResource\RelationManagers;
use App\Models\Buildingowner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BuildingownerResource extends Resource
{
    protected static ?string $model = Buildingowner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('buildingownername')
                ->required()
                ->maxLength(255),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('buildingownername'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBuildingowners::route('/'),
            'create' => Pages\CreateBuildingowner::route('/create'),
            'edit' => Pages\EditBuildingowner::route('/{record}/edit'),
        ];
    }
}
