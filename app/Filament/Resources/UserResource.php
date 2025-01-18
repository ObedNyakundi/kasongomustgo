<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationGroup = 'Admin Settings';
    protected static ?string $navigationIcon = 'fas-users-gear';
    protected static ?string $label = 'Users';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->label('User Name')
                ->placeholder('e.g. John Saitoti')
                ->columnSpan(2)
                ->maxLength(255),

                Forms\Components\Select::make('responsibility_id')
                    ->relationship('responsibility', 'name')
                    ->preload()
                    ->live()
                    ->searchable()
                    ->createOptionForm([
                            Forms\Components\TextInput::make('name')
                            ->label('Name')
                            ->required()
                            ->placeholder('e.g. Administrator')
                            ->columnSpan('full'),

                        ])
                    ->label('Responsibility:')
                    ->columnSpan('full'),

                Forms\Components\TextInput::make('email')
                ->required()
                ->unique(User::class, 'email')
                ->email()
                ->label('Email Address')
                ->columnSpan(2)
                ->placeholder('e.g. example@website.com')
                ->maxLength(255),

                 Forms\Components\TextInput::make('phone')
                ->label('Phone Number')
                ->tel()
                ->required()
                ->placeholder('e.g. 07XXXXXXXX')
                ->columnSpan('full'),

                Forms\Components\TextInput::make('password')
                ->required()
                ->password()
                ->revealable()
                ->hiddenOn('edit')
                ->label('Password')
                ->columnSpan(2)
                ->placeholder('*********')
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
                    ->label('User Name'),

                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->label('User Email Address'),

                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->sortable()
                    ->label('Phone Number'),

                Tables\Columns\TextColumn::make('responsibility.name')
                    ->searchable()
                    ->sortable()
                    ->label('Responsibility'),
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
            'index' => Pages\ListUsers::route('/'),
            //'create' => Pages\CreateUser::route('/create'),
            //'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
