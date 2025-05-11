@extends('layouts.app')

@section('title', 'Accessible Bathroom Solutions for Canadian Homes')
@section('meta_description', 'Home2stay offers professional accessible bathroom solutions across Canada. Our team creates safe, stylish, and functional bathrooms for all mobility needs.')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-16 pb-12 md:pt-24 md:pb-16 bg-gradient-to-r from-primary to-primary-dark text-white">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center z-0"
            style="background-image: url('{{ asset('ser-bath/make safety a priority at home by installing the products for your accessible bathroom in canada.png') }}');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col items-start">
                <nav class="flex mb-4 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}" class="text-white hover:text-gray-200">
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <a href="{{ route('services.index') }}" class="ml-1 text-white hover:text-gray-200">
                                    Services
                                </a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="ml-1 font-medium text-gray-100">Accessible Bathroom Solutions</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Make Safety a Priority at Home by Installing the Products for Your Accessible Bathroom in Canada</h1>
                <p class="text-lg md:text-xl opacity-90 max-w-3xl">The traditional bathroom can become challenging for the elderly and individuals with mobility issues. In Vancouver, almost a quarter of people aged 55 and older have trouble with their mobility. That's why our team at Home2stay is ready to help you make your bathrooms safer and more accessible. From grab bars to cutouts, Home2stay has the products you need to build your accessible bathroom in Canada.</p>
            </div>
        </div>
    </section>

    <!-- What is an Accessible Bathroom -->
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="w-full lg:w-1/2">
                    <div class="bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img src="{{ asset('ser-bath/what-is-an-accessible-bathroom.png') }}" alt="Accessible Bathroom" class="w-full h-auto object-cover">
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">What is an Accessible Bathroom?</h2>
                    
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg mb-4">
                            An accessible bathroom in Canada is designed for anyone who experiences limited mobility — the elderly, people with disabilities, patients recovering from surgery, and so many more.
                        </p>
                        <p class="text-gray-600 text-lg">
                            Unlike traditional bathrooms, this one is equipped with accessories such as tub cuts, grab bars, accessible sinks and faucets, wider doorways, and safety bathroom products to make it safer for use.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What is Needed for an Accessible Bathroom -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">What is Needed for an Accessible Bathroom in Vancouver?</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">To build an accessible bathroom in Canada, you will need to install some important equipment and accessories.</p>
            
            <!-- Tub Cuts -->
            <div class="flex flex-col lg:flex-row gap-8 items-center mb-16">
                <div class="w-full lg:w-1/2">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <img src="{{ asset('ser-bath/tub cuts.png') }}" alt="Tub Cuts" class="w-full h-auto">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Tub Cuts</h3>
                    <p class="text-gray-600 mb-4">
                        Tub cutouts or tub cuts are used to convert a tub into a shower. There are models of tub cuts that allow this to become a permanent change while others give you the option to alternate between using a shower and a bathtub.
                    </p>
                    <p class="text-gray-600 mb-6">
                        When installed in your accessible bathroom in Canada, these tub cuts allow the bathroom to remove one section of the tub wall. This makes it easier for people to step into the shower.
                    </p>
                    <a href="#" class="inline-flex items-center px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary-dark transition duration-300">
                        View Products
                    </a>
                </div>
            </div>
            
            <!-- Grab Bars -->
            <div class="flex flex-col lg:flex-row-reverse gap-8 items-center mb-16">
                <div class="w-full lg:w-1/2">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <img src="{{ asset('ser-bath/grab bars.png') }}" alt="Grab Bars" class="w-full h-auto">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Grab Bars</h3>
                    <p class="text-gray-600 mb-4">
                        To provide additional support and stability, many choose to install grab bars in accessible bathrooms. These are strategically placed near toilets, showers, and even bathrooms to help people maintain their balance when getting up, sitting down, or moving around. 
                    </p>
                    <p class="text-gray-600 mb-6">
                        Grab bars are always made from durable materials like stainless steel. Our products here at Home2stay come in different sizes, styles, and configurations for your bathroom.
                    </p>
                    <a href="#" class="inline-flex items-center px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary-dark transition duration-300">
                        View Products
                    </a>
                </div>
            </div>
            
            <!-- Barrier-Free Options -->
            <div class="flex flex-col lg:flex-row gap-8 items-center mb-16">
                <div class="w-full lg:w-1/2">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <img src="{{ asset('ser-bath/barrier-free options.png') }}" alt="Barrier-Free Options" class="w-full h-auto">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Barrier-Free Options</h3>
                    <p class="text-gray-600 mb-4">
                        To provide more access for those using wheelchairs and canes, an accessible bathroom in Canada should have barrier-free options. These give your bathrooms more space by taking out physical barriers and obstacles that people may encounter. 
                    </p>
                    <p class="text-gray-600 mb-6">
                        This can include roll-in showers, handheld showerheads, raised toiles, wall-mounted sinks, and lever-handled faucets.
                    </p>
                    <a href="#" class="inline-flex items-center px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary-dark transition duration-300">
                        View Products
                    </a>
                </div>
            </div>
            
            <!-- More Accessibility Features -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Accessible Sink -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="mb-6 overflow-hidden rounded-lg">
                        <img src="{{ asset('ser-bath/accessible sink.png') }}" alt="Accessible Sink" class="w-full h-auto">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Accessible Sink</h3>
                    <p class="text-gray-600">
                        In an accessible bathroom, sinks are installed at a lower height and have different features to make them more convenient to use.
                        This is done by providing more knee clearing and a deeper basin so that wheelchair users can easily roll up to the sink. They may also have a single-lever faucet. You may choose to add anti-scald devices to regulate the water temperature.
                    </p>
                </div>
                
                <!-- ADA-Compliant Faucets -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="mb-6 overflow-hidden rounded-lg">
                        <img src="{{ asset('ser-bath/ada-compliant faucets.png') }}" alt="ADA-Compliant Faucets" class="w-full h-auto">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">ADA-Compliant Faucets</h3>
                    <p class="text-gray-600">
                        An important feature of an accessible bathroom in Canada is an ADA-compliant faucet. These meet the requirements of the Americans with Disabilities Act.
                        Some of its notable features are touchless operations where sinks have motion sensors to turn on and off. They should also have insulated pipes to prevent accidental burns from hot pipes under the sink.
                    </p>
                </div>
                
                <!-- Bathroom Safety Products -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="mb-6 overflow-hidden rounded-lg">
                        <img src="{{ asset('ser-bath/bathroom-safety-products.jpg') }}" alt="Bathroom Safety Products" class="w-full h-auto">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Bathroom Safety Products</h3>
                    <p class="text-gray-600">
                        Accessible bathrooms all over Canada must also have other kinds of safety equipment to improve accessibility. 
                        These can include shower chairs, non-slip mats, raised toilet seats, and transfer benches. With these installed, you reduce the chances of falls and injuries, making the entire space safer and more accessible.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="inline-flex items-center px-4 py-2 bg-primary text-white font-medium rounded-lg hover:bg-primary-dark transition duration-300 text-sm">
                            View Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">What are the Benefits of Investing in An Accessible Bathroom in Canada?</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Everyone at home deserves to feel safe. That's why here at Home2stay, we provide you with products to help you build an accessible bathroom for everyone at home.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Improved Accessibility</h3>
                    <p class="text-gray-600">The biggest benefit of this bathroom is its improved accessibility. It makes it very easy for your loved ones to use the bathroom by providing them with wider doorways and accessories to help with balance, making the space safer and more convenient.</p>
                </div>
                
                <!-- Benefit 2 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Better Flexibility</h3>
                    <p class="text-gray-600">Equipping your accessible bathroom in Canada with additional features allows you to customize the room to your loved one's specific needs. This makes it easier for them to move around the bathroom, providing them with increased independence.</p>
                </div>
                
                <!-- Benefit 3 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Increased Safety Measures</h3>
                    <p class="text-gray-600">Plenty of home accidents often happen in the bathroom. From slips to falls to burns, many things can go wrong because of its inaccessibility inside. By equipping your bathroom with the right tools, you can reduce the chances of accidents.</p>
                </div>
                
                <!-- Benefit 4 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Simple Maintenance And Cleaning</h3>
                    <p class="text-gray-600">Accessible bathrooms in Canada are also designed to be easy to clean and maintain. They have smooth and non-porous surfaces making them resistant to water damage. Many of its features also have low-maintenance fixtures.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Home2stay Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Why Home2stay Provides the Best Products and Services for Your Accessible Bathroom in Vancouver</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">At Home2stay, you not only get the best products for an accessible bathroom but also services to match</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">No Obligation Assessment</h3>
                    <p class="text-gray-600">To help you make the right decision, Home2stay provides a no-obligation assessment that gives you all the information you need. This can be done at your home or via a video call. Once we give our recommendation, you have the choice as to which items you'll want to be installed in your home.</p>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Quick Installation</h3>
                    <p class="text-gray-600">Our team at Home2stay can offer same-day delivery service if you book before noon. However, this is still subject to the technician's availability. You won't have to wait for days or weeks to get your accessible Bathroom in Canada ready.</p>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Rentals</h3>
                    <p class="text-gray-600">Home2stay offers rental services for different types of equipment needed for your accessible bathroom. We provide a contract to our customers with maintenance and installation services included. The length of the contract varies depending on the type products installed.</p>
                </div>
                
                <!-- Service 4 -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Personalized Quote</h3>
                    <p class="text-gray-600">After our no-obligation assessment, we send you a personalized quote for your accessible bathroom in Canada. This will list the different products and installations you can add to your bathroom.</p>
                </div>
                
                <!-- Service 5 -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">After-Sales Services</h3>
                    <p class="text-gray-600">Once we've installed the accessories, our team takes the time to train you, a caregiver, and family members on how to use and properly take care of your Home2stay products. If no one is present during the installation, you can request additional training which can also be done via video call for your convenience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Get All the Things You Need for Your Accessible Bathroom in Canada from Home2stay Today!</h2>
                <p class="text-xl mb-8">Home2stay can provide your family with all the things you need for an accessible bathroom in Canada. We service different areas in Canada including Vancouver, Surrey, Port Moody, Ticities, Delta, and Maple Ridge.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                        Contact Us
                    </a>
                    <a href="tel:+16042393662" class="px-8 py-3 bg-transparent border-2 border-white text-white hover:bg-white/10 rounded-lg font-medium transition duration-300">
                        Call +1(604) 239-3662
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Frequently Asked Questions About Home2stay's Accessible Bathroom</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Home2stay focuses on creating homes that can meet the unique needs of each individual. To help you understand more, we've put together a list of frequently asked questions that cover the most important aspects of our accessible bathroom solutions.</p>
            
            <div class="max-w-3xl mx-auto space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Who can use an accessible bathroom?</h3>
                    <p class="text-gray-600">Anybody at home can use this kind of bathroom. Many families who renovate their homes choose to incorporate accessible bathrooms in their homes to create a universal design.</p>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">How many accessibility features are needed for this kind of bathroom?</h3>
                    <p class="text-gray-600">The features of an accessible bathroom in Vancouver depend on the user's needs. easier to use. Here are some of the common features: grab bars, a raised toilet seat, a roll-in shower, and tub cuts.</p>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Is an accessible bathroom required by law?</h3>
                    <p class="text-gray-600">The Accessible Canada Act requires public buildings and businesses to have accessible features in their bathroom. However, this is not required for private residences to have an accessible bathroom in Canada.</p>
                </div>
            </div>
        </div>
    </section>
@endsection 