<?php

namespace App\Filament\Resources;

use Illuminate\Support\Facades\Auth;
use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationGroup = 'Our Posts';
    protected static ?string $navigationIcon = 'fas-newspaper';
    protected static ?string $label = 'Posts';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('heading')
                    ->required()
                    ->label('Post Heading')
                    ->placeholder('e.g. Kasongo Just did Blab Blab Blab...')
                    ->columnSpan(2)
                    ->maxLength(255),

                Forms\Components\RichEditor::make('body')
                    ->label('Post Body')
                    ->placeholder('e.g. Hey [firstname], We wish you a happy birthday. Or Hello [tenant], Please remember to pay your remaining balance of [balance] before Friday ...')
                    ->fileAttachmentsDisk('attachments')
                    ->required()
                    ->columnSpan('full'),

                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->preload()
                    ->searchable()
                    ->createOptionForm([
                            Forms\Components\TextInput::make('name')
                            ->label('Category Name')
                            ->required()
                            ->placeholder('e.g. Politics, Abductions, etc.')
                            ->columnSpan('full'),
                        ])
                    ->label('Select Post Category:')
                    ->columnSpan('1/2')
                    ->required(),

                Forms\Components\Select::make('tags')
                    ->getSearchResultsUsing(fn (string $search): array => Category::where('name', 'like', "%{$search}%")->limit(10)->pluck('name', 'id')->toArray())
                    ->getOptionLabelUsing(fn ($value): ?string => User::find($value)?->name)
                    ->preload()
                    ->options(function (){
                        return Category::all()->pluck('name', 'id')->toArray();
                    })
                    ->multiple()
                    ->searchable()
                    ->label('Select other tags:')
                    ->columnSpan('1/2'),

                Forms\Components\FileUpload::make('cover_image') 
                        ->image()
                        ->required()
                        ->imageEditor()
                        ->disk('cover_images')
                        ->label('Select Cover Image: (Should be the best image)') 
                        ->imageEditorAspectRatios([
                            '16:16',
                            '4:4',
                            '1:1',
                        ])
                        ->panelLayout('grid')
                        ->columnSpan('full'),

                Forms\Components\Hidden::make('created_by')
                    ->default(Auth::user()->id)
                    ->required()
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
