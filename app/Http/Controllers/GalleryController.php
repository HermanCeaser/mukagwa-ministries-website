<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        // For now, use static data with the dynamic template structure
        $galleryPage = (object) [
            'title' => 'Our Gallery',
            'gallery_intro_title' => 'Gallery',
            'gallery_intro_subtitle' => 'Explore our gallery to know how we work',
        ];
        
        // Sample gallery sections (can be moved to Statamic later)
        $gallerySections = collect([
            (object) [
                'title' => 'All Africa Conference',
                'subtitle' => 'of Churches',
                'images' => [
                    asset('assets/img/gallery/gallery37.jpg'),
                    asset('assets/img/gallery/gallery38.jpg'),
                    asset('assets/img/gallery/gallery39.jpg'),
                    asset('assets/img/gallery/gallery40.jpg'),
                    asset('assets/img/gallery/gallery41.jpg'),
                ]
            ],
            (object) [
                'title' => 'Meeting Pastors',
                'subtitle' => 'in Luwero-District',
                'images' => [
                    asset('assets/img/gallery/gallery18.jpg'),
                    asset('assets/img/gallery/gallery19.jpg'),
                ]
            ],
            (object) [
                'title' => 'Advocating & Explaining our Projects',
                'subtitle' => 'to Women in Masuliita (Wakiso-District)',
                'images' => array_map(fn($i) => asset("assets/img/gallery/gallery{$i}.jpg"), range(20, 32))
            ],
        ]);
        
        return view('pages.gallery', compact('galleryPage', 'gallerySections'));
    }
}
