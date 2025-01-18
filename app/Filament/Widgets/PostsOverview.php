<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Filament\Resources\PostResource;
use App\Models\Post;

class PostsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Posts Created Today', Post::whereDate('created_at', today())->get()->count())
            -> description('Created today')
            -> descriptionIcon('heroicon-o-arrow-trending-up')
            ->icon('fas-clock')
            ->url(PostResource::getUrl('index'))
            ->color('success'),

            Stat::make('Created this Month', Post::whereMonth('created_at', Carbon::now()->month)->get()->count())
            -> description('Posts created this month')
            -> descriptionIcon('heroicon-o-arrow-trending-up')
            ->icon('fas-calendar-week')
            ->url(PostResource::getUrl('index'))
            ->color('primary'),

            Stat::make('All Posts', Post::get()->count())
            -> description('All Posts')
            -> descriptionIcon('heroicon-o-arrow-trending-up')
            ->icon('fas-newspaper')
            ->color('primary')
            ->url(PostResource::getUrl('index'))
            ->chart([
                '4','5','3','7','9','6','8'
            ]),
        ];
    }
}
