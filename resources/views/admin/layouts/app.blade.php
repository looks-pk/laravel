<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0078bf',
                        secondary: '#f8b301',
                        tertiary: '#d40000',
                    }
                }
            }
        }
    </script>
    
    <!-- Alpine.js for interactive components -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .admin-nav-link {
            @apply px-4 py-2 hover:bg-gray-700 rounded transition duration-200;
        }
        
        .admin-nav-link.active {
            @apply bg-primary text-white;
        }
    </style>
    
    @yield('styles')
</head>
<body class="flex h-screen bg-gray-100">
    <!-- Sidebar Navigation -->
    <aside class="w-64 bg-gray-800 text-white">
        <div class="p-4 border-b border-gray-700">
            <h1 class="text-2xl font-bold">Admin Panel</h1>
        </div>
        
        <nav class="p-4">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="admin-nav-link flex items-center {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.blog.index') }}" class="admin-nav-link flex items-center {{ request()->routeIs('admin.blog.*') && !request()->routeIs('admin.tags.*') ? 'active' : '' }}">
                        <i class="fas fa-file-alt mr-2"></i> Blog Posts
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.tags.index') }}" class="admin-nav-link flex items-center {{ request()->routeIs('admin.tags.*') ? 'active' : '' }}">
                        <i class="fas fa-tags mr-2"></i> Tags
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.categories.index') }}" class="admin-nav-link flex items-center {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                        <i class="fas fa-folder mr-2"></i> Categories
                    </a>
                </li>
                <li class="pt-4 mt-4 border-t border-gray-700">
                    <a href="/" class="admin-nav-link flex items-center">
                        <i class="fas fa-home mr-2"></i> Back to Site
                    </a>
                </li>
                <li>
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        <button type="submit" class="admin-nav-link w-full flex items-center text-left">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </aside>
    
    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top navbar -->
        <header class="bg-white shadow-sm">
            <div class="px-6 py-3 flex justify-between items-center">
                <h2 class="text-xl font-semibold">@yield('page-title', 'Dashboard')</h2>
                <div>
                    <span class="text-gray-700">
                        {{ auth()->user()->name ?? 'Admin User' }}
                    </span>
                </div>
            </div>
        </header>
        
        <!-- Main content area -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
            <!-- Flash messages -->
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            
            @if(session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif
            
            @yield('content')
        </main>
    </div>

    @yield('scripts')
</body>
</html> 