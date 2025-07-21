@extends('layouts.app')

@section('title', 'Home Elevators in Vancouver | Home2stay')
@section('meta_description', 'Home2stay provides home elevators in Vancouver for convenience and accessibility. Invest in your home’s value and safety. Contact us for a free assessment.')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-16 pb-12 md:pt-24 md:pb-16 bg-gradient-to-r from-primary to-primary-dark text-white">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center z-0"
            style="background-image: url('{{ asset('al-prod-page-imgs/ElevatorPorch-Lifts.jpg') }}');">
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
                                <span class="ml-1 font-medium text-gray-100">Home Elevators in Vancouver</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Moving to Different Floors is Made Easy with Our Home Elevators in Vancouver</h1>
                <p class="text-lg md:text-xl opacity-90 max-w-3xl">With a home elevator in your Vancouver home, you can take your home to a new level of convenience and accessibility. Our products here at Home2stay are more than just practical solutions — they are investments for your home’s value and safety! Whether you’re a family with young children, an elderly couple, or an individual with disabilities, Home2stay is here to make going up the stairs easier and safer.</p>
            </div>
        </div>
    </section>

    <!-- How are Home Elevators Senior-Friendly -->
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">How are Home Elevators Senior-Friendly and Accessible?</h2>
                <p class="text-lg text-gray-600 mt-4 max-w-3xl mx-auto">Home elevators in Vancouver are becoming more and more popular among our elderly population for several reasons. They are excellent solutions for those who want to maintain their independence to enjoy full access to all areas of their home.</p>
                 <img src="{{ asset('hm-elevator/how are home elevators senior-friendly and accessible.webp') }}" alt="How are Home Elevators Senior-Friendly and Accessible" class="w-full h-auto object-cover rounded-lg mt-6">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">They are Suitable for Any Type of Home</h3>
                    <p class="text-gray-600">In Vancouver, home elevators are a versatile solution that can be installed in almost any type of home. They can be customized to fit many home designs and decor so that it blends seamlessly into your existing home’s style. Home2stay’s home elevators are also available in a wide range of sizes and configurations to make the suitable for many houses around Canada.</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">They Have Outstanding Safety Features</h3>
                    <p class="text-gray-600">Home2stay’s home elevators for Vancouver homes have a wide range of safety features incorporated in them. This includes emergency stop switches, safety sensors in the platform, and emergency manual cranks. With these features, you make sure that your loved ones can easily reach a different area of the house whether it’s the 2nd floor or the garden porch.</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">They Improve the Lifestyle of All Age Groups</h3>
                    <p class="text-gray-600">No matter what age your family is, you still would want them to enjoy and access all areas of their home. By providing them with a home elevator in Vancouver, you ensure that they can do so. Our home elevators can be easily installed into new or existing homes and are suitable for indoor and outdoor purposes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">What Benefits Do Home Elevators in Vancouver Offer?</h2>
                <p class="text-lg text-gray-600 mt-4 max-w-3xl mx-auto">Retiring or aging with mobility issues can be challenging. However, you can always provide your family members with ways to maintain their independence — providing them with a home elevator is one of them!</p>
                <img src="{{ asset('hm-elevator/what benefits do home elevators in vancouver offer.webp') }}" alt="What Benefits Do Home Elevators in Vancouver Offer" class="w-full h-auto object-cover rounded-lg mt-6">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Complete Access to Your Home</h3>
                    <p class="text-gray-600">There’s literally no place like home. Many of our elderly family members feel more comfortable and safe here compare to aged-care facilities, so providing them with accessible solutions can help them better access all areas despite their mobility issues. With a home elevator in Vancouver, it makes the between floors of their home possible — both indoors and outdoors!</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Enhances Safety</h3>
                    <p class="text-gray-600">The safety of our elderly family members is very important. You may often worry about them falling and injuring themselves as they go up many staircases of the house. Home2stay’s home elevators in Vancouver help keep your mind at ease. By installing this home accessibility solution, you make sure that the chances of any falls and injuries are lessened.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Promotes Independence</h3>
                    <p class="text-gray-600">As you get older, you still want to freely move around. This gives you a sense of independence despite the mobility issues you experience. With the help of a home elevator in Vancouver, you give your family members just that. After all, they don’t want to feel too dependent on other people all the time. Allowing them to do their daily routine ensures them a sense of freedom.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Install -->
     <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">How to Install a Home Elevator?</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">The process of installing a home elevator in Vancouver can differ from home to home. This depends on several factors such as the home design and the personal preferences of the homeowner. We outline the steps our technicians here at Home2stay take when they install this accessible solution at your home.</p>
            <img src="{{ asset('hm-elevator/what are the benefits of investing in an accessible bathroom in canada.webp') }}" alt="How to Install a Home Elevator" class="w-full h-auto object-cover rounded-lg mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Choose the Right Location</h3>
                    <p class="text-gray-600">As people age, their balance and mobility can often be compromised because of several issues. They may have health conditions like arthritis and Parkinson’s disease. Installing grab bars can provide support and stability for older adults in the bathroom especially when sitting and standing on the toilet, using the sink, and maneuvering around the shower.</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Select the Type of Elevator You Want</h3>
                    <p class="text-gray-600">Before our team gets started with installation, you need to decide what kind of elevator you want at home. Here at Home2stay, we offer four different types of elevators and lifts. Find which model best suits your home!</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Ready Your Home</h3>
                    <p class="text-gray-600">It’s important to have a clean, safe, and dedicated space before your home elevator in Vancouver arrives for installation. Make sure your home is prepared. Your ground level should be at least a 10-by-15-foot area. There should also be a clear path between the space and the way for the elevator.</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Install the Elevator</h3>
                    <p class="text-gray-600">The installation process of home elevators depends on your home’s layout and your specific needs. At Home2stay, we will do our very best to go over everything at the end of every installation, to make sure you know how to use and maintain it with ease.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Models -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">What Home Elevator Models Do We Offer?</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Here at Home2stay, we offer different models for home elevators in Vancouver for the elderly and those people who experience mobility issues.</p>
            <img src="{{ asset('hm-elevator/what home elevator models do we offer.webp') }}" alt="What Home Elevator Models Do We Offer" class="w-full h-auto object-cover rounded-lg mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6">
                    <img src="{{ asset('hm-elevator/home2stay regular betrical porch  platform lift.webp') }}" alt="Home2stay Regular Vertical Porch / Platform Lift" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Regular Betrical Porch / Platform Lift</h3>
                    <p class="text-gray-600">We carry the Bruno VPL-3100 Vertical Platform lift as one of our home elevator models. This accessibility solution is the best choice for individuals and their caregivers who need help accessing their outdoor porches and decks. This comes with up and down buttons, a key control switch, and safety sensors. It also has weather-resistant finishes and controls, making it the perfect outdoor lift.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6">
                    <img src="{{ asset('hm-elevator/home2stay trus-t residential indoor  outdoor lift.webp') }}" alt="Home2stay Trus-T Residential Indoor / Outdoor Lift" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Trus-T Residential Indoor / Outdoor Lift</h3>
                    <p class="text-gray-600">This home elevator model by Trus-T is made to be used for both indoor and outdoor spaces. It’s the perfect wheelchair that can rise up to 14 feet high. It has oversize control switches that give riders independence to use the lift. This lift has a non-slip metal platform with high enclosures that assures your family they’re safe while using it.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6">
                    <img src="{{ asset('hm-elevator/home2stay stratus residential elevator.webp') }}" alt="Home2stay Stratus Residential Elevator" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Stratus Residential Elevator</h3>
                    <p class="text-gray-600">Another accessible solution offered by Trust-T Lift, the Startus elevator features an elegant wooden finish. This can be installed both indoors and outdoors because of its compact size. This home elevator for Vancouver homes can be modified to provide your family with three different stops. You can also customize its trims, doors, and rails to match your home.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6">
                    <img src="{{ asset('hm-elevator/home2stay stratus residential elevator.webp') }}" alt="Home2stay Crystal Residential Elevator" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Crystal Residential Elevator</h3>
                    <p class="text-gray-600">Provide your family members with both accessibility and style with our Crystal Residential Elevator. This model can be tailored to your home. This home elevator in Vancouver offers total customization to the homeowner. It has a soft start and stops with an all-electric drive system.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Home2stay Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Why Home2stay is the Best Distributor and Service Provider for Home Elevators in Vancouver?</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Home2stay can be your reliable partner for your home elevator needs in Vancouver. We are the leading experts for accessibility solutions for your home and provide you with the best elevators to help you and your family move independently right in the comfort of your home.</p>
            <img src="{{ asset('hm-elevator/why home2stay is the best distributor and service provider for home elevators in vancouver.webp') }}" alt="Why Home2stay is the Best Distributor and Service Provider for Home Elevators in Vancouver" class="w-full h-auto object-cover rounded-lg mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">No-obligation Assesment</h3>
                    <p class="text-gray-600">Home2stay offers a free assessment to assist you in picking the best accessibility solutions for your home including home elevators in Vancouver. This can be done either through a home visit or a video call. Once we make our recommendations, you don’t need to accept all of them. Simply pick which one you find best!</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Express Installation</h3>
                    <p class="text-gray-600">Our Home2stay team can deliver and install any necessary home elevator accessories the day after you book our express services. This means you won't have to wait for days or weeks to have your home elevator in Vancouver ready.</p>
                </div>
                 <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">After-Sales Services</h3>
                    <p class="text-gray-600">After we've installed your home elevator, our technician will show you how to use and maintain them properly. If nobody is there during the installation, you can request extra guidance which can be provided through a video call for your convenience.</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Exceptional Customer Service</h3>
                    <p class="text-gray-600">Home2stay is dedicated and committed to ensuring that our clients are satisfied with the products and after-sales services they receive. We go above and beyond to make you happy with the home elevators installations made in your home.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Get the Best Home Elevator in Vancouver from Home2stay Today!</h2>
                <p class="text-xl mb-8">Home2stay can help you or your loved one who needs a home elevator in Vancouver. We have a wide range of products and services to make you feel safe, independent, and at peace in the comfort of your beautiful home. Contact Home2stay so that we can discuss your specific needs, or directly call us today at (604) 259-1211!</p>
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
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Frequently Asked Questions about Home2stay’s Home Elevators in Vancouver</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Home2stay offers home elevators in Vancouver that are customized to fit the specific needs of each person. To help you understand better, we have made a list of commonly asked questions that cover the important details about our home elevator solutions.</p>
            
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Are home elevators safe?</h3>
                    <p class="text-gray-600">Yes, modern home elevators in Vancouver are safe, especially those provided by us here at Home2stay. Not only are there safety codes and local building codes to follow, but there is safety measure installed in the elevators themselves.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">How much space will an elevator take in my home?</h3>
                    <p class="text-gray-600">Most elevators are 5 feet by 5 feet in size, but we can make them smaller if needed. We can often customize the platform size you need for your home. However, this will depend on the model you choose.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Where is the best spot for my home elevator? Can grab bars be stylish as well as functional?</h3>
                    <p class="text-gray-600">Indoor and outdoor lifts are best installed at the corner of your homes. This makes sure that they don’t hinder movement in a room.</p>
                </div>
            </div>
        </div>
    </section>
@endsection 