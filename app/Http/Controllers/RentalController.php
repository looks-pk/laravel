<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RentalController extends Controller
{
    public function index()
    {
        // Logic to fetch all rentals
        // For now, we'll just pass a simple view
        return view('rentals.index');
    }
    
    public function categoryShow($category)
    {
        // Get all available category templates by checking the directory
        $path = resource_path('views/rentals/categories');
        $allowedCategories = [];
        
        if (File::exists($path)) {
            $files = File::files($path);
            foreach ($files as $file) {
                // Get file name without extension (.blade.php)
                $fileName = pathinfo($file, PATHINFO_FILENAME);
                $allowedCategories[] = str_replace('.blade', '', $fileName);
            }
        }
        
        // Return 404 if the category is not in our allowed list
        if (!in_array($category, $allowedCategories)) {
            abort(404);
        }
        
        // If we've made it this far, the view must exist
        return view('rentals.categories.' . $category, [
            'category' => $category,
            'categoryTitle' => ucwords(str_replace('-', ' ', $category))
        ]);
    }
} 