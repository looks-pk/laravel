@extends('layouts.app')

@section('title', 'Page Not Found')
@section('meta_description', 'The page you were looking for could not be found.')

@section('content')
    <div class="bg-white min-h-screen flex flex-col items-center justify-center py-16">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-center mb-8">
                <svg class="w-24 h-24 text-primary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <h1 class="text-5xl font-bold text-gray-800 mb-4">404</h1>
            <h2 class="text-2xl font-semibold text-gray-700 mb-8">Page Not Found</h2>
            <p class="text-lg text-gray-600 max-w-md mx-auto mb-12">
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>
            <div class="space-y-4 md:space-y-0 md:space-x-4 flex flex-col md:flex-row justify-center">
                <a href="{{ route('home') }}" class="px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary-dark transition duration-300">
                    Go to Homepage
                </a>
                <a href="{{ route('contact') }}" class="px-6 py-3 bg-white text-primary border border-primary font-medium rounded-lg hover:bg-gray-50 transition duration-300">
                    Contact Support
                </a>
            </div>
        </div>
    </div>
@endsection 