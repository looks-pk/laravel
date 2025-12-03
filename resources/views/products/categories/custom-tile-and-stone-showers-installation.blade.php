@extends('layouts.app')

@section('title', 'Custom Tiled Shower Installation Vancouver | Professional Tile Work | Home2stay')
@section('meta_description', 'Expert Custom Tiled Shower Installation Vancouver. Professional shower remodeling, waterproofing, and custom tile work. Quality custom shower and tile installation services.')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .product-highlight {
            border-left: 4px solid #4f46e5;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Banner -->
    <section class="relative bg-gray-900 overflow-hidden" style="min-height: 500px;">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 relative z-10 flex items-center mb-4 mt-4" style="min-height: 500px;">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">Custom Tiled Shower Installation Vancouver</h1>
                <h2 class="text-2xl md:text-3xl font-bold text-white/90 mb-4">Professional Shower Remodeling & Tile Work by Home2stay</h2>
                <p class="text-xl text-white/90 mb-8">
                    We provide high-quality Custom Tiled Shower Installation Vancouver services for homeowners who want a beautiful, durable, and modern shower space. Our goal is simple: to create a custom shower that fits your style, your needs, and your home. Whether you want a luxury spa feel or a clean and simple design, our team is here to build a shower that lasts for years.
                </p>
                <p class="text-xl text-white/90 mb-8">
                    A tiled shower is more than just a place to get ready; it's a part of your daily routine. That is why every project we take is planned with care, precision, and professional skill. With years of experience in custom shower and tile installation, we know the layout, waterproofing, and design details that make a tiled shower perfect.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#products"
                        class="px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded-lg transition duration-300 font-medium">
                        View Products
                    </a>
                    <a href="#assessment"
                        class="px-6 py-3 bg-white hover:bg-gray-100 text-primary rounded-lg transition duration-300 font-medium">
                        Request Assessment
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose a Custom Tiled Shower?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    A personalised tiled shower provides you the freedom to design to your preference in terms of size and materials, and design. It is flexible compared to ready-made shower units, and hence you can have the exact appearance.
                </p>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto mt-4">
                    The following are some of the reasons why homeowners in Vancouver prefer Custom Tiled Shower Installation Vancouver:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Benefit 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}" alt="Long-Lasting Quality"
                            class="w-full object-cover" style="height: 250px;">
                        <div class="absolute top-0 right-0 bg-primary text-white text-sm font-bold px-3 py-1 m-4 rounded">
                            Popular
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Long-Lasting Quality:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Tile is tough, sturdy, and best suited for areas where there is water usage. A tiled shower can serve for several years with minimal repair when it is properly installed.</p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}" alt="Personalized Design"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Personalized Design:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">You may select colours, textures, and patterns of mosaics; however, large porcelain tiles are available to you. Your shower becomes a different entity in your house.</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}" alt="Better for Vancouver Homes"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Better for Vancouver Homes:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Due to the wet climate of Vancouver, installing a tiled shower is a good idea. Your shower is kept dry with its high waterproofing ability.</p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl flex flex-col h-full">
                    <div class="overflow-hidden relative">
                        <img src="{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}" alt="Increases Home Value"
                            class="w-full object-cover" style="height: 250px;">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Increases Home Value:</h3>
                        <p class="text-gray-600 mb-4 flex-grow">One of the most effective solutions to raise property value is the upgrades in the bathroom. The thing that future buyers value is the provision of a custom tiled shower.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Custom Tiled Shower Installation Process -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Custom Tiled Shower Installation Process:</h2>
                    <p class="text-lg text-gray-600">
                        Home2stay follows a structured and reliable process to make sure every shower is installed perfectly. Here's what you can expect:
                    </p>
                </div>

                <div class="space-y-6 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Consultation and Planning:</h3>
                        <p class="text-gray-600">We begin by understanding your needs. Our team discusses your design ideas, materials, budget, and layout options. We also check your current bathroom space to plan drainage, plumbing, and tile layout. Many homeowners contact us for custom shower and tile installation, and we ensure proper planning from day one.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Demolition and Preparation:</h3>
                        <p class="text-gray-600">The old shower or tub is safely removed. We prepare the space by checking the walls, plumbing, and floor for any issues. This step ensures your new shower has a solid foundation.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Waterproofing System:</h3>
                        <p class="text-gray-600">This is one of the most important parts of our service. We install a complete waterproofing system, sealing walls, floors, and corners. This prevents leaks, mold, and future damage, especially important in Vancouver's humid weather.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Tile Layout Planning:</h3>
                        <p class="text-gray-600">Before installing tiles, we map the design on the walls and floor. This helps maintain clean lines, balanced spacing, and a polished look.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Tile Installation:</h3>
                        <p class="text-gray-600">Each tile is installed with high-quality materials. Be it ceramic, porcelain, stone, or mosaic, we are able to guarantee that it is perfectly aligned and firmly adhered. For all custom shower and tile installation projects, we use premium tools and techniques.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Grouting and Sealing:</h3>
                        <p class="text-gray-600">Once the tiles are laid, we apply the grout of your preferred choice. The tiles are then sealed, and the grout is covered so that they are not stained or subjected to moisture.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Finishing Touches:</h3>
                        <p class="text-gray-600">This includes placement of shelves, niches, fixtures, glass doors, or benches according to your design. All of it is even, smooth, and re-inspected.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Final Inspection:</h3>
                        <p class="text-gray-600">We also examine the entire shower to ensure that all the details have been done up to our quality standards. You have an unused, clean, beautiful tiled shower created with complete Custom Tiled Shower Installation Vancouver quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tile Options Section -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Tile Options for Your New Shower:</h2>
                        <p class="text-lg text-gray-600 mb-4">
                            We provide numerous varieties of tiles in order to build a shower the look of your house. There are popular options of:
                        </p>
                        <div class="space-y-4 mb-6">
                            <div class="bg-white p-4 rounded-lg">
                                <h3 class="font-bold text-gray-800 mb-2">Ceramic Tile:</h3>
                                <p class="text-gray-600">Walls, easy to clean and affordable.</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg">
                                <h3 class="font-bold text-gray-800 mb-2">Porcelain Tile:</h3>
                                <p class="text-gray-600">Very powerful, waterproof, and suitable for walls and floors.</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg">
                                <h3 class="font-bold text-gray-800 mb-2">Stone Tile:</h3>
                                <p class="text-gray-600">Giving a natural and luxury appearance, marble, slate, and travertine are used.</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg">
                                <h3 class="font-bold text-gray-800 mb-2">Mosaic Tile:</h3>
                                <p class="text-gray-600">Ideal in accents, shower niches, and ornamental designs.</p>
                            </div>
                        </div>
                        <p class="text-lg text-gray-600 mb-4">
                            Our team will assist you in making the correct selection of the tiles according to your bathroom size, lighting, and style objectives.
                        </p>
                        <p class="mb-5">Give us a call at <b><a href="tel:+16042591211" style="color: red;">(604) 259-1211</a></b> or submit a <b> <a href="#assessment" style="color: red;">FREE ASSESSMENT FORM</a></b> to check.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}" alt="Tile Options"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cost Information Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-8 md:p-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">How Much Does a Custom Tiled Shower Cost?</h2>

                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 mb-6">
                                The price is based on your size of your shower, tile type, plumbing requirements, and design options. The average price of a Custom Tiled Shower Installation Vancouver will include:
                            </p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-700">• Tile materials</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-700">• Waterproofing system</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-700">• Labour and installation</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-700">• Demolition of the old shower</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-700">• Individual features (bench, niche, LED lighting, etc.)</p>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-4">
                                We also give transparent and straightforward pricing. When you consult us, we provide a close estimate so that you can make the best choice based on your budget.
                            </p>

                            <div class="mt-8 flex flex-wrap gap-4 justify-center">
                                <a href="#assessment"
                                    class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                                    Request Free Assessment
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Home2stay -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose Home2stay?</h2>
                    <p class="text-lg text-gray-600">
                        Home2stay is reputed for quality workmanship, honest service and reliability in the long term. This is why homeowners recommend us:
                    </p>
                </div>

                <div class="space-y-6 mb-12">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Skilled Tile Installers:</h3>
                        <p class="text-gray-600">Our team is experienced in practice and knows the details that help to make a shower strong and beautiful. Many clients trust us for affordable custom shower and tile installation services.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Professional Waterproofing:</h3>
                        <p class="text-gray-600">We are concerned with moisture protection to make your shower strong and without leaks.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Clean and Careful Work:</h3>
                        <p class="text-gray-600">We value your place of residence, maintain the space clean, and operate with the least amount of disturbance.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Custom Design Support:</h3>
                        <p class="text-gray-600">Have no idea which material or plan to use? We take you through designs that are to your liking.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Guaranteed Skill:</h3>
                        <p class="text-gray-600">We support our work and stand behind our work even after installation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Maintenance and Transform Section -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Maintenance Tips for Your Tiled Shower:</h2>
                        <p class="text-lg text-gray-600 mb-4">
                            A custom tiled shower is easy to take care of if you follow simple steps:
                        </p>
                        <ul class="text-lg text-gray-600 space-y-2 mb-6">
                            <li>• Wipe tiles after use to prevent water marks</li>
                            <li>• Clean grout lines using mild cleaners</li>
                            <li>• Reseal grout once or twice a year</li>
                            <li>• Keep the bathroom ventilated to reduce moisture</li>
                            <li>• Avoid harsh chemicals that may damage tile surfaces</li>
                        </ul>
                        <p class="text-lg text-gray-600 mb-6">
                            These steps will keep your shower looking new for many years.
                        </p>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Transform Your Bathroom with Home2stay:</h3>
                        <p class="text-lg text-gray-600">
                            A designed shower fitted with tiles will totally transform the appearance and feel of your bathroom. We also simplify the whole process at Home2stay, both planning and installation. Our team is concerned with the quality, safety, and long-term outcomes. We are there to assist you in case you are willing to renovate your shower or need something new and modern. The results you get from Custom Tiled Shower Installation Vancouver make your bathroom stylish, durable, and comfortable.
                        </p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('/bathsafety-cat/walk-in-tubs-1.jpg') }}" alt="Tiled Shower Maintenance"
                            class="w-full h-full object-cover" style="min-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Blogs -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Related Blogs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($latestPosts as $post)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
                        @if($post->featured_image)
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                        @else
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-400 text-2xl"><i class="fas fa-image"></i></span>
                            </div>
                        @endif
                        
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span class="mr-4">
                                    <i class="fas fa-calendar-alt mr-1"></i> {{ $post->published_at ? $post->published_at->format('F j, Y') : $post->created_at->format('F j, Y') }}
                                </span>
                                <span>
                                    <i class="fas fa-user mr-1"></i> {{ $post->user->name ?? 'Admin' }}
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-primary transition-colors">{{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                            <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
                                Read More <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-gray-500">No blog posts published yet. Check back soon!</p>
                    </div>
                @endforelse
            </div>
            
            @if($latestPosts->count() > 0)
                <div class="text-center mt-10">
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                        View All Blog Posts
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Assessment Form -->
    <section id="assessment" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8 md:p-12">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Get Your Custom Tiled Shower Today</h2>
                    <p class="text-gray-600 mb-4">Ready to transform your bathroom with a beautiful custom tiled shower? Home2stay offers professional Custom Tiled Shower Installation Vancouver services designed to meet your style, budget, and functional needs.</p>
                    <p class="text-gray-600">Contact us today for a free consultation and let us help you create the shower of your dreams.</p>
                </div>

                <form action="/submit-assessment" method="POST">
                    @csrf
                    <input type="hidden" name="form_type" value="quote">
                    <input type="hidden" name="form_source" value="Custom_Tiled_Shower_Installation_quote_form">
                    <!-- Personal Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="location">Bathroom Location</label>
                            <input type="text" id="location" name="location" placeholder="e.g., Master bathroom, Main floor bathroom, etc."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Tile Type Interest -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">What type of tile interests you? *</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="tile_types[]" value="ceramic" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Ceramic Tile</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="tile_types[]" value="porcelain" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Porcelain Tile</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="tile_types[]" value="stone" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Natural Stone (Marble, Slate)</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="tile_types[]" value="mosaic" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Mosaic Tile</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="tile_types[]" value="not_sure" class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Not Sure/Need Consultation</span>
                            </label>
                        </div>
                    </div>

                    <!-- Project Type -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">What type of project do you have?</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="project_types[]" value="full_renovation"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Full Bathroom Renovation</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="project_types[]" value="shower_replacement"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Shower Replacement</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="project_types[]" value="tub_to_shower"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Tub to Shower Conversion</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="project_types[]" value="new_construction"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">New Construction</span>
                            </label>
                        </div>
                    </div>

                    <!-- Design Features -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Are you interested in any special features?</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="features[]" value="built_in_bench"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Built-in Bench</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="features[]" value="shower_niche"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Shower Niche/Shelving</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="features[]" value="glass_door"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Glass Doors</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="features[]" value="led_lighting"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">LED Lighting</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" name="features[]" value="heated_floor"
                                    class="form-checkbox text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Heated Floor</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please describe your bathroom dimensions, design preferences, budget range, or any specific questions about custom tiled shower installation..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                            Submit Assessment Request
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">FAQs:</h2>
                </div>

                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How long does a Custom Tiled Shower Installation Vancouver project take?</h3>
                        <p class="text-gray-600">
                            Most installations take 5–10 days, depending on size, tile type, and design features like niches or benches.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Is custom shower and tile installation more durable than prefabricated units?</h3>
                        <p class="text-gray-600">
                            Yes. Tile showers last longer, resist moisture better, and offer stronger waterproofing when installed properly.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Can I choose my own tile materials?</h3>
                        <p class="text-gray-600">
                            You can select ceramic, porcelain, mosaic, or natural stone tiles based on your style and budget.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Does Home2stay handle both demolition and installation?</h3>
                        <p class="text-gray-600">
                            Yes. We remove the old shower, prepare the space, waterproof it, and complete the entire installation.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">How much does a Custom Tiled Shower Installation Vancouver usually cost?</h3>
                        <p class="text-gray-600">
                            Costs vary depending on tile material, size, and additional features. Home2stay provides transparent estimates during consultation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Bathroom?</h2>
                <p class="text-xl mb-8">Contact us today to explore how our Custom Tiled Shower Installation Vancouver services can create the beautiful, durable shower you've been dreaming of.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}"
                        class="px-8 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                        Contact Us
                    </a>
                    <a href="{{ route('products.index') }}"
                        class="px-8 py-3 bg-transparent border-2 border-white text-white hover:bg-white/10 rounded-lg font-medium transition duration-300">
                        View All Products
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Initialize any scripts needed for the page
    </script>
@endpush