@extends('layouts.app')

@section('title', 'Grab Bars in Vancouver for Home Safety | Home2stay')
@section('meta_description', 'Home2stay offers a wide selection of grab bars in Vancouver to enhance bathroom safety and stability for your loved ones. Contact us for a free assessment.')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-16 pb-12 md:pt-24 md:pb-16 bg-gradient-to-r from-primary to-primary-dark text-white">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center z-0"
            style="background-image: url('{{ asset('ser-bath/grab bars.png') }}');">
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
                                <span class="ml-1 font-medium text-gray-100">Grab Bars Vancouver</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Provide Your Loved Ones with Balance and Stability with the Help of Our Grab Bars in Vancouver</h1>
                <p class="text-lg md:text-xl opacity-90 max-w-3xl">Grab bars otherwise known as grab rails are an essential safety feature for those who want to make their home more accessible and safe for everyone. This simple yet effective accessory resides the risk of accidents at home! Here at Home2stay, we provide you with various grab rail configurations that not only provide safety to everyone but also add a touch of beauty to your bathroom.</p>
            </div>
        </div>
    </section>

    <!-- What are Grab Bars -->
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-8">
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="w-full lg:w-1/2">
                    <div class="bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img src="{{ asset('ser-bath/what-is-an-accessible-bathroom.png') }}" alt="What are Grab Bars" class="w-full h-auto object-cover">
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">What are Grab Bars?</h2>
                    
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg mb-4">
                            These are safety attachments usually installed in your home’s bathrooms. It provides people with the support they need to maintain their balance. You can find them affixed to walls by toilets, doorways, and the shower.
                        </p>
                        <p class="text-gray-600 text-lg">
                            Grab bars are made from stainless steel. All of these provide your family with durable fixtures in various rooms.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How Do Grab Rails Help Improve Bathroom Safety? -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">How Do Grab Rails Help Improve Bathroom Safety?</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">In Vancouver homes, grab bars are usually found in the bathroom. With the accessibility solution, you can expect fewer accidents and injuries.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <img src="{{ asset('bathsafety-cat/Home2stay-Dependa-Bar.webp') }}" alt="Provide Support and Stability" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Provide Support and Stability</h3>
                    <p class="text-gray-600">Grab bars provide stable support for individuals to hold onto while moving around in the bathroom, helping to prevent slips and fall. They also provide stability when getting in and out of the shower or bathtub.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <img src="{{ asset('ser-bath/bathroom-safety-products.jpg') }}" alt="Reduce the Risk of Injury" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Reduce the Risk of Injury</h3>
                    <p class="text-gray-600">Falls in the bathroom can be particularly dangerous as hard surfaces and fixtures can cause serious injuries. By providing a secure grip and support, grab bars in Vancouver, Surrey, and Langley bathrooms help reduce the risk of injury.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <img src="{{ asset('bathsafety-cat/invisia-pro.jpg') }}" alt="Aid in Independence" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Aid in Independence</h3>
                    <p class="text-gray-600">For people with mobility or balance issues, using the bathroom independently can be challenging. Grab bars help promote independence by providing secure support, allowing individuals to move around with confidence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Who Can Benefit -->
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-8">
            <div class="flex flex-col lg:flex-row-reverse gap-8 items-center">
                <div class="w-full lg:w-1/2">
                    <div class="bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img src="{{ asset('abt-company/shower-handrail-grab-bar-elderly-people-bathroom-hospital-retirement-home 1.png') }}" alt="Elderly person using a grab bar" class="w-full h-auto object-cover">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Who Can Benefit from Grab Bars in Vancouver?</h2>
                    <p class="text-gray-600 text-lg mb-4">Whether you’re preventing falls or providing support for family members, this accessibility solution can be beneficial for almost anyone who struggles with both balance and mobility. In Vancouver, grab bars can be extremely hopeful to provide your home with a universal design.</p>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start"><span class="text-primary mr-2">✔</span><strong>The Elderly:</strong> As people age, their balance and mobility can often be compromised because of several issues. They may have health conditions like arthritis and Parkinson’s disease. Installing grab bars can provide support and stability for older adults in the bathroom especially when sitting and standing on the toilet, using the sink, and maneuvering around the shower.</li>
                        <li class="flex items-start"><span class="text-primary mr-2">✔</span><strong>Person with Disabilities:</strong> People with disabilities or physical limitations may find it challenging to navigate a bathroom safely. That’s why many families choose to install grab bars in their Vancouver homes to help in providing a secure grip and support.</li>
                        <li class="flex items-start"><span class="text-primary mr-2">✔</span><strong>Children:</strong> Your little ones can also benefit from grab bars, as they may struggle to maintain their balance on wet and slippery surfaces. Children are also very active, so it is a safety precaution to have assistance whenever they go around your bathrooms.</li>
                        <li class="flex items-start"><span class="text-primary mr-2">✔</span><strong>People Recovering from Injuries or Surgeries:</strong> People with disabilities or physical limitations may find it challenging to navigate a bathroom safely. That’s why many families choose to install grab bars in their Vancouver homes to help in providing a secure grip and support.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Home2stay Grab Bars -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Home2stay Grab Bars in Vancouver</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Here at Home2stay, we provide our customers with many types of grab bars for their Vancouver homes. Customers can pick which style best suits their needs and their home’s aesthetic. We promise that all of these make balance and support easier for all people.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6">
                    <img src="{{ asset('bathsafety-cat/Home2stay-Easy-Mount-Grab-Bars-Stainless-Steel.jpg') }}" alt="Straight Grab Bars" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Straight Grab Bars</h3>
                    <p class="text-gray-600">These are the most common type of grab bars in Vancouver. A Home2stay, we have them available in a variety of lengths and styles. Whether they’re mounted horizontally or vertically, they are designed to provide support and stability. Our Home2stay Easy Mount Grab Bars can make your bathroom, shower, and any other room in your house safer and more secure. With its nine-hole flanges, the Easy Mount Grab Bar is more flexible and easier to put in place.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6">
                    <img src="{{ asset('bathsafety-cat/lock-support-grab-bar.jpg') }}" alt="Angled Grab Bars" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Angled Grab Bars</h3>
                    <p class="text-gray-600">When grab bars are made at an angle, they provide support that can be helpful for people coming from a seated position. This is especially helpful for the toilet and the shower. Our PLUS Toilet Paper Holder is attached to the wall and gives you support right where you need it. The PLUS Series is a line of grab bars for bathrooms that can hold up to 500 pounds. It is ADA-compliant and made of stainless steel that won't rust.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6">
                    <img src="{{ asset('bathsafety-cat/Home2stay-Grab-Bars-Curved-Arched-or-Straight.jpg') }}" alt="Curved Grab Bars" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Curved Grab Bars</h3>
                    <p class="text-gray-600">With a curved design, grab bars provide a more ergonomic grip since the curve fits the natural shape of the hand. This can be especially helpful for people with arthritis and other hand or wrist conditions. The PLUS Crescent Grab Bar can be put up on a bathroom wall or above your shower faucet to give you support right where you need it. Use it when you get out of a bath or when you turn on the water.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6">
                    <img src="{{ asset('bathsafety-cat/Home2stay-2-in-1-Grab-Bar-Toilet-Paper-Holder.jpg') }}" alt="Combination Grab Bars" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Combination Grab Bars</h3>
                    <p class="text-gray-600">There are also combination grab bars available here at Home2stay. These are usually multifunctional since they have built-in shelves, soap dishes, and even towel bars. These can be useful for people who need additional storage space in the bathroom. The PLUS Shampoo Shelf can hold even the biggest bottles and can be used as a grab bar when needed. The built-in drainage helps keep the shelf clean and free of water and soap buildup.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Home2stay Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Why Home2stay is the Best Distributor and Service Provider for Grab Bars in Vancouver?</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">At Home2stay, our dedication to providing comfort and safety in the home extends beyond just our grab bar selection. We understand that everyone deserves to feel secure in their living space. That's why we believe that grab bars in Vancouver homes are an essential addition to any space. Here are some of the benefits you can enjoy if you choose to install grab bars:</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Various Options</h3>
                    <p class="text-gray-600">At Home2stay, we offer a wide range of grab bars that are not only functional but also blend seamlessly with your bathroom's style and color palette. Our grab bars in Vancouver are designed to look like everyday bathroom fixtures, such as towel bars, toilet paper holders, toiletry shelves, corner shelves, accent rings, and robe hooks.</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">No Obligation Assessment</h3>
                    <p class="text-gray-600">If you’re having trouble picking the right grab bar for your space, you can avail yourself of our FREE and no-obligation assessment. Here, our team makes recommendations based on the layout of your house. This can be done either in person or through a video call. After the assessment, we provide you with our suggestions based on the layout and your needs. Note that, you have no obligation to use all the suggestions given.</p>
                </div>
                 <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Package</h3>
                    <p class="text-gray-600">We also offer packages for our grab bars! When purchased together with another product, they can offer the best accessibility solutions for your home! One of our most popular packages includes a grab bar or two with a tub cut. You can save up to $75 off the regular price of our grab bars in Vancouver installation services, allowing you to get the safety and support you need at a more affordable price.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Get Your Grab Bars in Vancouver from Home2stay Today!</h2>
                <p class="text-xl mb-8">At Home2stay, we understand the importance of safety and accessibility. That’s why we offer a range of grab bars that are easy to install and use. Whether you're looking for decorative grab bars in Vancouver, Delta Richmond, or Surrey to match your bathroom fixtures or more utilitarian options designed for heavy use, we've got you covered! Contact Home2stay so that we can discuss your specific needs, or directly call us today at (604) 259-1211!</p>
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
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Frequently Asked Questions about Grab Bars Vancouver</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Home2stay provides grab bars for Vancouver families who are looking for accessibility solutions for all members. If you’re considering this for the first time, here are some commonly asked questions from our customers.</p>
            
            <div class="max-w-3xl mx-auto space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Where should grab bars be installed?</h3>
                    <p class="text-gray-600">Grab bars can be installed in almost any room at home, but they are commonly found in bathrooms since this is where many are at risk from slips and falls.</p>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">How do I choose the right grab bar for my needs?</h3>
                    <p class="text-gray-600">Choosing the right grab bar will depend on a variety of factors, including the location where it will be installed and the weight it needs to support. It's important to choose a grab bar that is appropriate for your individual needs and to have it installed properly to ensure maximum safety and effectiveness.</p>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Can grab bars be stylish as well as functional?</h3>
                    <p class="text-gray-600">Yes, grab bars can be stylish as well as functional! Like our products here at Home2stay, these attachments come in different styles, finishes, and colors that help you match them with the current style of your home.</p>
                </div>
            </div>
        </div>
    </section>
@endsection 