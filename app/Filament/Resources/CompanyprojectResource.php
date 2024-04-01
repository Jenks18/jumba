<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyprojectResource\Pages;
use App\Filament\Resources\CompanyprojectResource\RelationManagers;
use App\Models\Companyproject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyprojectResource extends Resource
{
    protected static ?string $model = Companyproject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('companyprojectname')
                ->required()
                ->maxLength(255),
                Forms\Components\Select::make('buildingowner_id')
                ->relationship('buildingowner', 'buildingownername')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('companyprojectname')
                ->label("Company"),
                Tables\Columns\TextColumn::make('buildingowner.buildingownername')
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
            'index' => Pages\ListCompanyprojects::route('/'),
            'create' => Pages\CreateCompanyproject::route('/create'),
            'edit' => Pages\EditCompanyproject::route('/{record}/edit'),
        ];
    }
}
