<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AreaController extends Controller
{
    public function index()
    {
        // Get all available areas by checking the directory
        $path = resource_path('views/areas');
        $areas = [];
        
        if (File::exists($path)) {
            $files = File::files($path);
            foreach ($files as $file) {
                // Get the base filename and remove .blade.php extension
                $fileName = $file->getFilenameWithoutExtension(); // This removes .php
                $fileName = str_replace('.blade', '', $fileName); // This removes .blade
                
                // Skip index file and only include actual area files
                if ($fileName !== 'index') {
                    $areas[] = $fileName;
                }
            }
        }
        
        return view('areas.index', compact('areas'));
    }
    
    public function show($area)
    {
        // Get all available area templates by checking the directory
        $path = resource_path('views/areas');
        $allowedAreas = [];
        
        if (File::exists($path)) {
            $files = File::files($path);
            foreach ($files as $file) {
                // Get the base filename and remove .blade.php extension
                $fileName = $file->getFilenameWithoutExtension(); // This removes .php
                $fileName = str_replace('.blade', '', $fileName); // This removes .blade
                
                if ($fileName !== 'index') {
                    $allowedAreas[] = $fileName;
                }
            }
        }
        
        // Return 404 if the area is not in our allowed list
        if (!in_array($area, $allowedAreas)) {
            abort(404);
        }

        // Get latest blog posts for the related blogs section
        $latestPosts = BlogPost::published()
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
        
        // If we've made it this far, the view must exist
        return view('areas.' . $area, [
            'area' => $area,
            'areaTitle' => ucwords(str_replace('-', ' ', $area)),
            'latestPosts' => $latestPosts
        ]);
    }
} 