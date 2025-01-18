<?php

namespace App\Filament\Widgets;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

use App\Models\Post;
use App\Models\Category;

class PostsList extends BaseWidget
{
    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Post::query()->orderBy('created_at', 'desc')
            )

            ->columns([
                Tables\Columns\TextColumn::make('heading')
                    ->searchable()
                    ->sortable()
                    ->words(7)
                    ->label('Heading'),

                Tables\Columns\TextColumn::make('category.name')
                    ->searchable()
                    ->sortable()
                    ->label('Category'),

                IconColumn::make('is_featured')
                    ->label('Featured') 
                    ->boolean(),

                Tables\Columns\TextColumn::make('tags')
                    ->searchable()
                    ->sortable()
                    ->getStateUsing(function(Post $post){
                        $alltags= $post->tags;
                        $transitions= ' ';
                        foreach($alltags as $tag){
                            $singletag= Category::where('id', $tag)->first();
                            $transitions .= $singletag->name.', ';
                        }
                        //strip the last ' -> ' from the string
                        $transitions = substr($transitions, 0, -2);
                        $transitions .= '.';
                        return $transitions;
                    })
                    ->label('Tags'),

                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->sortable()
                    ->label('Created By'),

                Tables\Columns\TextColumn::make('created_at')
                    ->searchable()
                    ->sortable()
                    ->label('Created On'),
            ])
            ->defaultPaginationPageOption(10);
    }
}
