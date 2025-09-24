<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Statamic\Facades\Entry;

class GalleryController extends Controller
{
    public function index(): View
    {
        // Get the Gallery page from Statamic
        $galleryPage = Entry::findBySlug('gallery', 'pages');
        
        // Get gallery sections from Statamic
        $gallerySections = Entry::whereCollection('gallery_sections')
            ->where('published', true)
            ->orderBy('order', 'asc')
            ->get();
        
        return view('pages.gallery', compact('galleryPage', 'gallerySections'));
    }
}
