<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BlogPosts extends BaseWidget
{
    protected function getStats(): array
    {
        // $postCount = Post::isPublished()->count();
        return [
            Stat::make('Published Posts', Post::isPublished()->count())
            ->description('Posts that have been published')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),

            Stat::make('Draft Posts', Post::isDraft()->count())
            ->description('Posts in Draft Status')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('info'),
        ];
    }
}
