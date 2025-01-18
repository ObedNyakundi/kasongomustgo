<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResponsibilityResource\Pages;
use App\Filament\Resources\ResponsibilityResource\RelationManagers;
use App\Models\Responsibility;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResponsibilityResource extends Resource
{
    protected static ?string $model = Responsibility::class;

    protected static ?string $navigationGroup = 'Admin Settings';
    protected static ?string $label = 'Responsibilities';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->label('Responsibility Name')
                ->placeholder('e.g. Auditor, Accountant, etc.')
                ->columnSpan(2)
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Responsibility Name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListResponsibilities::route('/'),
            //'create' => Pages\CreateResponsibility::route('/create'),
            //'edit' => Pages\EditResponsibility::route('/{record}/edit'),
        ];
    }
}
