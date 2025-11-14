<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    /**
     * Generate XML sitemap for search engines
     */
    public function xml()
    {
        $sitemap = $this->generateSitemapData();
        
        return response()->view('sitemap.xml', compact('sitemap'))
            ->header('Content-Type', 'application/xml');
    }

    /**
     * Show HTML sitemap for users
     */
    public function html()
    {
        $sitemap = $this->generateSitemapData();
        
        return view('sitemap.html', compact('sitemap'));
    }

    /**
     * Generate comprehensive sitemap data
     */
    private function generateSitemapData()
    {
        $baseUrl = config('app.url');
        $sitemap = [];

        // Main Pages
        $sitemap['main'] = [
            [
                'url' => route('home'),
                'title' => 'Home',
                'priority' => '1.0',
                'changefreq' => 'daily',
                'lastmod' => now()->toW3cString(),
            ],
            [
                'url' => route('about'),
                'title' => 'About Us',
                'priority' => '0.8',
                'changefreq' => 'monthly',
                'lastmod' => now()->toW3cString(),
            ],
            [
                'url' => route('contact'),
                'title' => 'Contact Us',
                'priority' => '0.8',
                'changefreq' => 'monthly',
                'lastmod' => now()->toW3cString(),
            ],
            [
                'url' => route('services.index'),
                'title' => 'Services',
                'priority' => '0.9',
                'changefreq' => 'weekly',
                'lastmod' => now()->toW3cString(),
            ],
            [
                'url' => route('products.index'),
                'title' => 'All Products',
                'priority' => '0.9',
                'changefreq' => 'weekly',
                'lastmod' => now()->toW3cString(),
            ],
            [
                'url' => route('rentals.index'),
                'title' => 'Rentals',
                'priority' => '0.8',
                'changefreq' => 'weekly',
                'lastmod' => now()->toW3cString(),
            ],
            [
                'url' => route('blog.index'),
                'title' => 'Blog',
                'priority' => '0.9',
                'changefreq' => 'daily',
                'lastmod' => now()->toW3cString(),
            ],
        ];

        // Services
        $sitemap['services'] = [];
        try {
            $services = Service::where('is_active', true)->get();
            foreach ($services as $service) {
                $sitemap['services'][] = [
                    'url' => route('services.show', $service->slug),
                    'title' => $service->name,
                    'priority' => '0.8',
                    'changefreq' => 'monthly',
                    'lastmod' => $service->updated_at->toW3cString(),
                ];
            }
        } catch (\Exception $e) {
            // Skip if services table doesn't exist or has issues
        }

        // Custom Service Pages
        $sitemap['custom_services'] = [
            [
                'url' => route('services.custom.bathroom'),
                'title' => 'Accessible Bathroom Canada',
                'priority' => '0.8',
                'changefreq' => 'monthly',
                'lastmod' => now()->toW3cString(),
            ],
            [
                'url' => route('services.custom.company'),
                'title' => 'Company Profile',
                'priority' => '0.7',
                'changefreq' => 'monthly',
                'lastmod' => now()->toW3cString(),
            ],
            [
                'url' => route('services.custom.gallery'),
                'title' => 'Gallery',
                'priority' => '0.7',
                'changefreq' => 'monthly',
                'lastmod' => now()->toW3cString(),
            ],
        ];

        // Blog Posts
        $sitemap['blog'] = [];
        try {
            $blogPosts = BlogPost::where('status', 'published')->latest('published_at')->get();
            foreach ($blogPosts as $post) {
                $sitemap['blog'][] = [
                    'url' => route('blog.show', $post->slug),
                    'title' => $post->title,
                    'priority' => '0.7',
                    'changefreq' => 'weekly',
                    'lastmod' => $post->updated_at->toW3cString(),
                ];
            }
        } catch (\Exception $e) {
            // Skip if blog_posts table doesn't exist or has issues
        }

        // Product Categories
        $sitemap['product_categories'] = $this->getProductCategories();

        // Products
        $sitemap['products'] = $this->getProducts();

        // Rental Categories
        $sitemap['rental_categories'] = $this->getRentalCategories();

        // Areas
        $sitemap['areas'] = $this->getAreas();

        // Special Pages
        $sitemap['special'] = [
            [
                'url' => route('stairlifts.canada'),
                'title' => 'Stairlifts Canada',
                'priority' => '0.8',
                'changefreq' => 'monthly',
                'lastmod' => now()->toW3cString(),
            ],
        ];

        return $sitemap;
    }

    /**
     * Get product categories from blade files
     */
    private function getProductCategories()
    {
        $categories = [];
        $categoriesPath = resource_path('views/products/categories');

        if (File::exists($categoriesPath)) {
            $files = File::files($categoriesPath);
            foreach ($files as $file) {
                $slug = $file->getFilenameWithoutExtension();
                $slug = str_replace('.blade', '', $slug);
                
                $categories[] = [
                    'url' => route('products.category', $slug),
                    'title' => ucwords(str_replace('-', ' ', $slug)),
                    'priority' => '0.8',
                    'changefreq' => 'weekly',
                    'lastmod' => date('c', $file->getMTime()),
                ];
            }
        }

        return $categories;
    }

    /**
     * Get products from blade files
     */
    private function getProducts()
    {
        $products = [];
        $productsPath = resource_path('views/products/products');

        if (File::exists($productsPath)) {
            $files = File::files($productsPath);
            foreach ($files as $file) {
                $slug = $file->getFilenameWithoutExtension();
                $slug = str_replace('.blade', '', $slug);
                
                $products[] = [
                    'url' => route('products.show', $slug),
                    'title' => ucwords(str_replace('-', ' ', $slug)),
                    'priority' => '0.6',
                    'changefreq' => 'monthly',
                    'lastmod' => date('c', $file->getMTime()),
                ];
            }
        }

        return $products;
    }

    /**
     * Get rental categories from blade files
     */
    private function getRentalCategories()
    {
        $categories = [];
        $categoriesPath = resource_path('views/rentals/categories');

        if (File::exists($categoriesPath)) {
            $files = File::files($categoriesPath);
            foreach ($files as $file) {
                $slug = $file->getFilenameWithoutExtension();
                $slug = str_replace('.blade', '', $slug);
                
                $categories[] = [
                    'url' => route('rentals.category', $slug),
                    'title' => 'Rental: ' . ucwords(str_replace('-', ' ', $slug)),
                    'priority' => '0.7',
                    'changefreq' => 'weekly',
                    'lastmod' => date('c', $file->getMTime()),
                ];
            }
        }

        return $categories;
    }

    /**
     * Get areas from blade files
     */
    private function getAreas()
    {
        $areas = [];
        $areasPath = resource_path('views/areas');

        if (File::exists($areasPath)) {
            $files = File::files($areasPath);
            foreach ($files as $file) {
                $slug = $file->getFilenameWithoutExtension();
                $slug = str_replace('.blade', '', $slug);
                
                if ($slug !== 'index') {
                    $areas[] = [
                        'url' => route('areas.show', $slug),
                        'title' => ucwords(str_replace('-', ' ', $slug)),
                        'priority' => '0.6',
                        'changefreq' => 'monthly',
                        'lastmod' => date('c', $file->getMTime()),
                    ];
                }
            }
        }

        return $areas;
    }
}
