@extends('layouts.app')

@section('title', 'Stairlifts in Vancouver | Home2stay')
@section('meta_description', 'Home2stay is your local Bruno stairlift expert in Vancouver. We offer top-of-the-line straight and curved stairlifts. Contact us for a free assessment.')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-16 pb-12 md:pt-24 md:pb-16 bg-gradient-to-r from-primary to-primary-dark text-white">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center z-0"
            style="background-image: url('{{ asset('al-prod-page-imgs/Stair-Lifts.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        
        <div class="container mx-auto px-8 relative z-10">
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
                                <span class="ml-1 font-medium text-gray-100">Stairlifts in Vancouver</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Stairlifts in Vancouver</h1>
                <p class="text-lg md:text-xl opacity-90 max-w-3xl">Going up and down the stairs can be both safe and comfortable with the help of Home2stay’s Bruno stairlift expert.Our team here at Home2stay is here to guide you throughout the process from consultation to post-installation!</p>
                 <a href="{{ route('contact') }}" class="mt-6 px-8 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                    GET A CUSTOMIZED QUOTE FROM US HERE!
                </a>
            </div>
        </div>
    </section>

    <!-- What are Stairlifts? -->
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-8">
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="w-full lg:w-1/2">
                    <div class="bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img src="{{ asset('bathsafety-cat/1100stairlift-min.jpg') }}" alt="What are Stairlifts" class="w-full h-auto object-cover">
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Going Up the Stairs Has Never Been Easier Thanks to Stairlifts in Vancouver</h2>
                     <p class="text-gray-600 text-lg mb-4">
                        Provide your loved ones with an easier way to get up the stairs with stairlifts for your Vancouver home. This accessibility solution provides them with a safe yet efficient way of moving around their home. Here at Home2stay, we provide you with a range of options that can be perfect for your home.
                    </p>
                    <h3 class="text-2xl font-bold text-gray-800 my-4">What are Stairlifts?</h3>
                    <p class="text-gray-600 text-lg mb-4">
                        Stairlifts in Vancouver are a common solution for people with mobility issues. Whether it’s used indoors or outdoor, a stairlift allows people with limited mobility to move around in a multi-level home.
                    </p>
                    <p class="text-gray-600 text-lg">
                        Those who have trouble walking to take the stairs multiple times a day can benefit most from a stairlift that takes them from one floor to another with ease, comfort, and stability. Some of the people who benefit the most from stairlifts are the elderly. Many of them want to grow old in the home they’ve lived in for most of their lives, but they face a frustrating obstacle in the form of stairs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Should You Install -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Why Should You Install a Home2stay Stairlift in Your Home?</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">There are several benefits to installing a stairlift in Vancouver. For the elderly, the injured, and people with medical conditions that limit their energy or mobility, not having to take the stairs could make or break their positive living experience. Some benefits of stairlifts include:</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Accessibility</h3>
                    <p class="text-gray-600">Stairlifts in Vancouver give people access to areas and levels of their homes that may be hard to reach otherwise. Many people who have trouble walking or climbing stairs end up having to move to single-level houses or apartments, leaving their well-loved homes and personal effects behind. But this simple addition to their homes would make all the difference, allowing them to stay in the place they own and stay close to who and what they hold dear.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Safety</h3>
                    <p class="text-gray-600">Stairlifts are a safe and secure means of navigating between upper and lower floors. They reduce the risk of falling or injuries. You can have your loved ones simply sit back and relax as they are taken up or down the stairs. The speed of most stairlifts in Vancouver can also be controlled manually or even remotely, allowing people to move at their preferred pace.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Comfort</h3>
                    <p class="text-gray-600">In addition to moving at speeds that are controlled by the people using them, most stairlifts in Vancouver can be customized to their user’s preferences. This way, they can be optimized for the utmost comfort. From customizing fabric choices to footrest sizes, adding a power swivel seat, or a power folding footrest, there are many ways to customize your Vancouver stairlift such that it is designed to fit your needs.</p>
                </div>
                 <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Easy to Use</h3>
                    <p class="text-gray-600">A Vancouver stairlift’s ease of use is imperative for those who need to operate it. The elderly, the injured, and those with medical conditions need their equipment and accessibility features to be user-friendly and easy to explain, especially to handlers and caretakers. One of the best things about Home2stay’s stairlifts is that it doesn’t take a rocket scientist to figure them out—a simple demonstration, or even a manual, will do!</p>
                </div>
                 <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Restores Independence</h3>
                    <p class="text-gray-600">Stairlifts allow individuals with mobility issues to move freely from one floor to another without the need for others’ assistance. This increases or restores the feeling of independence that people who have trouble walking or climbing may have lost due to their injury, old age, or condition. In allowing these people to retain their independence, distributors of stairlifts in Vancouver are helping increase their feeling of self-worth and confidence.</p>
                </div>
                 <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Increases Freedom</h3>
                    <p class="text-gray-600">When someone with a walking or climbing problem has a stairlift, it lessens their need for assistance from someone else. If they are fully capable of navigating their multi-level home or building on their own, and assuming they have no other concerns that require a full-time caretaker, this gives them the freedom of privacy and autonomy. They can make their own rules, live in their own house, and be their person without anyone’s help.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Models of Stairlifts -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Models of Stairlifts Available at Home2stay</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Stairlifts in Vancouver come in two distinct styles that directly correspond to the type of staircase you own: straight and custom curved. Here are some modes available here at Home2stay.</p>
            
            <div class="flex flex-col lg:flex-row gap-8 items-center mb-16">
                <div class="w-full lg:w-1/2">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <img src="{{ asset('bathsafety-cat/1100stairlift2.jpg') }}" alt="Straight Stairlifts" class="w-full h-auto">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Straight Stairlifts</h3>
                    <p class="text-gray-600 mb-4">
                        As its name suggests, a straight stairlift runs on a straight track that is attached directly to a staircase. They are relatively easy to install since they are usually just mounted on stairs and often don’t need any major modifications. At Home2stay, we offer two models of straight stairlifts in Vancouver. The Home2stay Straight Stair Lift, features a low-profile rail design that can easily fit in with almost any home design. We also have the Home2stay Straight Stair Lift 1100 for you to choose from.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col lg:flex-row-reverse gap-8 items-center">
                <div class="w-full lg:w-1/2">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <img src="{{ asset('bathsafety-cat/Freecurve-Curved-Stairlift-min.jpg') }}" alt="Custom Curved Stairlifts" class="w-full h-auto">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Custom Curved Stairlifts</h3>
                    <p class="text-gray-600 mb-4">
                        Curved stairlifts are designed to run on a custom-made curved track that follows the shape of your staircase. They are precisely fitted to the curve of your stairs and landings, so you can expect that these are a bit more complex to install. These chairs are usually customizable with optional swivel seats and folding footrests and adjustable seat heights. At Home2stay, we have the Home2stay Custom Curved Stair Lift and the Home2stay Freecurve Curved Stair Lift for your preference.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Home2stay Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Why is Home2stay the Best Distributor of Stairlifts in Vancouver?</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Home2stay prides itself on distributing only the best accessibility equipment for residents all over British Columbia. Our stairlifts are sourced from one of the top accessibility equipment providers in America, Bruno Independent Living Aids, and the process we take guarantees you quick and safe installment.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Top-of-the-Line Bruno Stairlifts</h3>
                    <p class="text-gray-600">Home2stay is the local Bruno stair lift expert in the British Columbia region. Bruno Independent Living Aids is a veteran-founded, family-owned company crafting and providing stair lifts and other accessibility equipment that are proudly made in the USA. They have the largest network in the industry, taking pride in their commitment to product quality, dependability, and user safety.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Professional Installers</h3>
                    <p class="text-gray-600">Our installers at Home2stay are certified experts in all Bruno stairlifts and commit to making your home as accessible as possible, as soon as possible. We are dedicated to finding solutions that allow you to live with safety and dignity in the comfort of your own home. Home2stay values your trust and is here to help you before, during, and after your purchase.</p>
                </div>
                 <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">No Obligation Assessment</h3>
                    <p class="text-gray-600">At Home2stay, we are proud to offer free assessment services that are one call or email away. Simply request a Free Assessment through our website, and we’ll be in touch with you on your preferred schedule. The assessment can be done in person or, for your safety and privacy, via video call. The best part is this comes with no strings attached—you won’t be required to buy anything from us or pay a thing once the assessment is done!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Source the Best Stairlifts in Vancouver from the Supplier of Top Home Accessibility Solutions and Renovations, Home2stay!</h2>
                <p class="text-xl mb-8">Whether you’re ahead in years, recently suffered an injury, or are otherwise unable to navigate a multi-level home, there’s no need to despair. There is hope in the form of Vancouver stairlifts sourced from Home2stay. Contact Home2stay so that we can discuss your specific needs, or directly call us today at (604) 259-1211!</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-primary hover:bg-gray-100 rounded-lg font-medium transition duration-300">
                        Contact Us
                    </a>
                    <a href="tel:+16042591211" class="px-8 py-3 bg-transparent border-2 border-white text-white hover:bg-white/10 rounded-lg font-medium transition duration-300">
                        Call (604) 259-1211
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Frequently Asked Questions about Stairlifts in Vancouver</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Stairlifts for your Vancouver home are an excellent addition to your accessible home. However, if you’re installing this for the first time, we’ve collated questions that are usually asked by many of our customers.</p>
            
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Will a Stairlift Block My Staircase?</h3>
                    <p class="text-gray-600">Vancouver stairlifts have compact designs that ensure they are out of the way when not in use. Some have offset swivel seats and some can be folded in, so they should leave plenty of space on a staircase of average width for people to go up or down.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Does a stairlift make noise?</h3>
                    <p class="text-gray-600">No, Bruno stairlifts are not typically noisy. Bruno is known for manufacturing high-quality stairlifts that operate quietly and smoothly. This is thanks to the various features and technologies they include to reduce noise and vibration when in use.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Are my stairs suitable for a stairlift?</h3>
                    <p class="text-gray-600">Most staircases are suitable for a stairlift, but if you want to be sure, you can book a free assessment with us to confirm!</p>
                </div>
                 <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">What happens in case of a power outage?</h3>
                    <p class="text-gray-600">Most Bruno stairlifts, including all the ones we provide, are battery-operated. That means it will continue to operate even during a power outage. Just remember to be careful navigating your home when the lights are out!</p>
                </div>
            </div>
        </div>
    </section>
@endsection 