<?php

namespace App\Widgets;

use Statamic\Widgets\Widget;
use Statamic\Facades\Entry;

class RecentCollectionsWidget extends Widget
{
    public function html()
    {
        $collections = [
            'pages' => 'Pages',
            'team_members' => 'Team Members', 
            'gallery_sections' => 'Gallery Sections'
        ];

        $recentEntries = [];
        
        foreach ($collections as $handle => $title) {
            $entries = Entry::whereCollection($handle)
                ->orderBy('updated_at', 'desc')
                ->limit(5);
                
            $recentEntries[$handle] = [
                'title' => $title,
                'entries' => $entries,
                'route' => cp_route('collections.show', $handle)
            ];
        }

        return view('widgets.recent_collections', compact('recentEntries'));
    }
}