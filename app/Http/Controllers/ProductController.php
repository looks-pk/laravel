<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        // For now, we'll use services as products since they seem to be the same concept
        // in this application based on the controller structure
        $products = Service::where('is_active', true)->get();
        
        return view('products.index', compact('products'));
    }
    
    public function categoryShow($category)
    {
        // Get all available category templates by checking the directory
        $path = resource_path('views/products/categories');
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

        // Get latest blog posts for the related blogs section
        $latestPosts = BlogPost::published()
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
        
        // If we've made it this far, the view must exist
        return view('products.categories.' . $category, [
            'category' => $category,
            'categoryTitle' => ucwords(str_replace('-', ' ', $category)),
            'latestPosts' => $latestPosts
        ]);
    }
    
    public function productShow($product)
    {
        // Get all available product templates by checking the directory
        $path = resource_path('views/products/products');
        $allowedProducts = [];
        
        if (File::exists($path)) {
            $files = File::files($path);
            foreach ($files as $file) {
                // Get file name without extension (.blade.php)
                $fileName = pathinfo($file, PATHINFO_FILENAME);
                $allowedProducts[] = str_replace('.blade', '', $fileName);
            }
        }
        
        // Return 404 if the product is not in our allowed list
        if (!in_array($product, $allowedProducts)) {
            abort(404);
        }

        // Get latest blog posts for the related blogs section
        $latestPosts = BlogPost::published()
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
        
        // If we've made it this far, the view must exist
        return view('products.products.' . $product, [
            'product' => $product,
            'productTitle' => ucwords(str_replace('-', ' ', $product)),
            'latestPosts' => $latestPosts
        ]);
    }
} 