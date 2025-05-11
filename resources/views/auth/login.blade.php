<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="max-w-md w-full bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="py-8 px-8 bg-primary text-white text-center">
            <h1 class="text-2xl font-bold">Admin Login</h1>
        </div>
        
        <div class="py-8 px-8">
            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" name="email" id="email" 
                            class="pl-10 w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" 
                            value="{{ old('email') }}" required autofocus placeholder="admin@example.com">
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" name="password" id="password" 
                            class="pl-10 w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                            required placeholder="Enter your password">
                    </div>
                </div>
                
                <div class="flex items-center mb-6">
                    <input type="checkbox" name="remember" id="remember" 
                        class="rounded border-gray-300 text-primary shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="ml-2 text-sm text-gray-700">Remember Me</label>
                </div>
                
                <div>
                    <button type="submit" class="w-full bg-primary hover:bg-primary/80 text-white font-bold py-3 px-4 rounded-md transition duration-200">
                        Sign In
                    </button>
                </div>
                
                <div class="mt-6 text-center">
                    <a href="/" class="text-sm text-primary hover:underline">
                        <i class="fas fa-arrow-left mr-1"></i> Back to Website
                    </a>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Admin Credentials Info (Remove in production) -->
    <div class="mt-4 text-center">
        <div class="inline-block bg-white p-4 rounded-lg shadow text-sm text-gray-600">
            <p class="font-semibold">Default Admin Credentials:</p>
            <p>Email: digitalpartnerabdullah@gmail.com</p>
            <p>Password: digitalpartnerabdullah@gmail.com</p>
        </div>
    </div>
</body>
</html> 