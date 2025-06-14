@extends('layouts.app')

@section('title', $service->title)
@section('meta_description', $service->meta_description)

@section('content')
<div class="bg-primary text-white py-20">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $service->title }}</h1>
            <p class="text-xl text-white/80 max-w-2xl mx-auto">{{ $service->excerpt }}</p>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <div class="prose max-w-none">
                {!! $service->content !!}
            </div>

            <!-- Features Section -->
            <div class="mt-16">
                <h2 class="text-3xl font-bold mb-8">Key Features</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($service->features as $feature)
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-check-circle text-primary text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">{{ $feature['title'] }}</h3>
                            <p class="text-gray-600">{{ $feature['description'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Process Section -->
            <div class="mt-16">
                <h2 class="text-3xl font-bold mb-8">Our Process</h2>
                <div class="space-y-8">
                    @foreach($service->process as $step)
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center">
                            {{ $loop->iteration }}
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">{{ $step['title'] }}</h3>
                            <p class="text-gray-600">{{ $step['description'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
            <!-- Contact Form -->
            <div class="bg-white rounded-lg shadow-md p-6 sticky top-8">
                <h3 class="text-xl font-bold mb-4">Get a Free Quote</h3>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" name="service" value="{{ $service->slug }}">
                    
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-primary text-white py-3 rounded-lg hover:bg-primary/90 transition-colors">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Related Services -->
            <div class="mt-8">
                <h3 class="text-xl font-bold mb-4">Related Services</h3>
                <div class="space-y-4">
                    @foreach($relatedServices as $related)
                    <a href="{{ route('services.show', $related->slug) }}" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow">
                        <h4 class="font-semibold text-primary">{{ $related->title }}</h4>
                        <p class="text-sm text-gray-600 mt-1">{{ Str::limit($related->excerpt, 100) }}</p>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">What Our Clients Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-user text-gray-500"></i>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold">{{ $testimonial->name }}</h4>
                        <p class="text-sm text-gray-600">{{ $testimonial->company }}</p>
                    </div>
                </div>
                <p class="text-gray-600">"{{ $testimonial->content }}"</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection 