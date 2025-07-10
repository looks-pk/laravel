<?php

use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\AreaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// Custom service pages - explicit individual routes only
Route::get('/accessible-bathroom-canada', function() {
    return app()->call([app(ServiceController::class), 'customShow'], ['service' => 'accessible-bathroom-canada']);
})->name('services.custom.bathroom');

Route::get('/company-profile', function() {
    return app()->call([app(ServiceController::class), 'customShow'], ['service' => 'company-profile']);
})->name('services.custom.company');

Route::get('/gallery', function() {
    return app()->call([app(ServiceController::class), 'customShow'], ['service' => 'gallery']);
})->name('services.custom.gallery');

// Products
Route::get('/all-products', function() {
    return view('products.index');
})->name('products.index');
Route::get('/products-categories/{category}', [ProductController::class, 'categoryShow'])->name('products.category');
Route::get('/products/{product}', [ProductController::class, 'productShow'])->name('products.show');

// Rentals
Route::get('/rentals', [RentalController::class, 'index'])->name('rentals.index');
Route::get('/rentals-categories/{category}', [RentalController::class, 'categoryShow'])->name('rentals.category');

// Areas - Test route first
Route::get('/areas-test', function() {
    return 'Areas test route works!';
});

// Areas - Debug controller
Route::get('/areas-debug', function() {
    try {
        $controller = new \App\Http\Controllers\AreaController();
        $result = $controller->index();
        return 'AreaController works! View: ' . $result->name() . ', Areas count: ' . count($result->getData()['areas']);
    } catch (\Exception $e) {
        return 'AreaController error: ' . $e->getMessage();
    }
});

// Areas - Simple direct route
Route::get('/areas', function() {
    // Get areas the same way the controller does
    $path = resource_path('views/areas');
    $areas = [];
    
    if (\Illuminate\Support\Facades\File::exists($path)) {
        $files = \Illuminate\Support\Facades\File::files($path);
        foreach ($files as $file) {
            $fileName = $file->getFilenameWithoutExtension();
            $fileName = str_replace('.blade', '', $fileName);
            if ($fileName !== 'index') {
                $areas[] = $fileName;
            }
        }
    }
    
    return view('areas.index', compact('areas'));
})->name('areas.index');

Route::get('/areas/{area}', [AreaController::class, 'show'])->name('areas.show');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Test database connection
Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "✅ Database is connected!";
    } catch (\Exception $e) {
        return "❌ Connection failed: " . $e->getMessage();
    }
});

// Admin routes
Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    // Blog management
    Route::resource('blog', AdminBlogController::class)->except(['show']);
    
    // Tag management
    Route::get('tags', [AdminBlogController::class, 'manageTags'])->name('tags.index');
    Route::post('tags', [AdminBlogController::class, 'storeTag'])->name('tags.store');
    Route::delete('tags/{tag}', [AdminBlogController::class, 'destroyTag'])->name('tags.destroy');
    
    // Category management
    Route::resource('categories', CategoryController::class);
});

// Important: Fallback route for 404 errors - must be the last route
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
