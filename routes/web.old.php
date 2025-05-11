<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RentalController;

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

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// Products
Route::get('/all-products', function() {
    return view('products.index');
})->name('products.index');
Route::get('/products-categories/{category}', [ProductController::class, 'categoryShow'])->name('products.category');
Route::get('/products/{product}', [ProductController::class, 'productShow'])->name('products.show');

// Rentals
Route::get('/rentals', [RentalController::class, 'index'])->name('rentals.index');
Route::get('/rentals-categories/{category}', [RentalController::class, 'categoryShow'])->name('rentals.category');

// Custom service route - moved after products routes
Route::get('/{service}', [ServiceController::class, 'customShow'])
    ->where('service', '^(?!admin|login|products|services|blog|about|contact).*$')
    ->name('services.custom');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "✅ Database is connected!";
    } catch (\Exception $e) {
        return "❌ Connection failed: " . $e->getMessage();
    }
});

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin routes
Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    // Blog management
    Route::resource('blog', BlogController::class)->except(['show']);
    
    // Tag management
    Route::get('tags', [BlogController::class, 'manageTags'])->name('tags.index');
    Route::post('tags', [BlogController::class, 'storeTag'])->name('tags.store');
    Route::delete('tags/{tag}', [BlogController::class, 'destroyTag'])->name('tags.destroy');
    
    // Category management
    Route::resource('categories', CategoryController::class);
});
