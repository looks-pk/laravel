@extends('layouts.app')

@section('title', 'Tub Cut Outs in Canada for Accessible Bathrooms | Home2stay')
@section('meta_description', 'Home2stay installs the best tub cut outs in Canada to make your bathroom safer and more accessible. Contact us for a free home assessment.')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-16 pb-12 md:pt-24 md:pb-16 bg-gradient-to-r from-primary to-primary-dark text-white">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center z-0"
            style="background-image: url('{{ asset('bathsafety-cat/clean cut tub cut.png') }}');">
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
                                <span class="ml-1 font-medium text-gray-100">Tub Cut Outs Canada</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Trust Us to Install the Best Tub Cut Outs in Canada for Your Home’s Accessible Bathroom</h1>
                <p class="text-lg md:text-xl opacity-90 max-w-3xl">Home2stay is here to make your bathrooms safer and more accessible with the help of our tub cut outs in Canada. This is designed to help people with mobility issues as part of our commitment to making your life easier.</p>
            </div>
        </div>
    </section>

    <!-- What is a Tub Cut Out -->
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-8">
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="w-full lg:w-1/2">
                    <div class="bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img src="{{ asset('bathsafety-cat/CleanCut-Step-V1-e1503607014281.jpg') }}" alt="What is a Tub Cut Out" class="w-full h-auto object-cover">
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">What is a Tub Cut Out?</h2>
                    
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg mb-4">
                            It might be difficult for some individuals to get in and out of regular bathtubs, especially when they have trouble lifting and swinging their legs. With the help of a tub cut out, they won’t need to worry about this.
                        </p>
                        <p class="text-gray-600 text-lg">
                            A tub cut out is a section of your tub that is made removable to create a lower step-in height for users. This makes it easier for people to get in and out of their tub without the risk of falling.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How are Tub Cut Outs in Canada made? -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">How are Tub Cut Outs in Canada made?</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Our tub cut outs in Canada are done by our trained staff who specializes in making accessible bathrooms. Here is an overview of how this is done:</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Measure the Bathtub</h3>
                    <p class="text-gray-600">Here at Home2stay, we assess your home to see what products fit your space best. The same goes for our tub cut outs in Canada. We will take a look at your bathroom through either an online or on-site assessment to help you decide which product best fits your needs.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Choose the Appropriate Tub Cut Out</h3>
                    <p class="text-gray-600">In our assessment, we provide you with our suggestions as to which tub cut out to use. This is a result of the measurements taken by our technician as well as your family’s needs, and the size of the tub.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Installation</h3>
                    <p class="text-gray-600">Once you’ve decided on the tub cut out, Home2stay can now begin the installation. Not only do we sell products but we also are a construction company that you can trust to install our products.</p>
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
                        <img src="{{ asset('al-prod-page-imgs/Safety-Poles-Handrails.jpg') }}" alt="Person using a grab bar in bathroom" class="w-full h-auto object-cover">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Who Can Benefit From Tub Cut Outs?</h2>
                    <p class="text-gray-600 text-lg mb-4">Tub cuts can be a valuable solution for anyone looking to improve the accessibility and safety of their bathroom. But here is the list of groups who can especially benefit from tub cut outs in Canada:</p>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start"><span class="text-primary mr-2">✔</span><strong>The Elderly:</strong> As people get older, their mobility and balance slowly decline, making it harder for them to get in and out of a traditional bathtub. Having tub cuts can lessen the chances of accidents since it stepping into a tub becomes easier. On top of that, caregivers and family members can also easily roll in wheelchairs closer to bathtubs.</li>
                        <li class="flex items-start"><span class="text-primary mr-2">✔</span><strong>Individuals with Limited Mobility:</strong> Tub cut outs from Canada can also benefit those who have limited mobility. This includes people who have arthritis, paralysis, and multiple sclerosis. This provides them with a simple yet effective way to get into the shower daily. It also gives their caregivers an easier time getting them inside.</li>
                        <li class="flex items-start"><span class="text-primary mr-2">✔</span><strong>Person with Disabilities:</strong> This bathroom feature also makes a huge difference in the lives of people with disabilities. Traditional bathtubs can be a big problem for people with physical disabilities or chronic conditions that make it hard for them to move around. Having tub cut outs in Canada make it easier for people with disabilities to use the bathroom. which helps them keep their independence and dignity.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Home2stay’s Tub Cut Outs in Canada -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Home2stay’s Tub Cut Outs in Canada</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Here at Home2stay, we provide our customers with tub cuts from CleanCut and Quick Tub. Through our home assessment, we help you determine which product is best for your accessible bathroom.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6">
                    <img src="{{ asset('bathsafety-cat/Convertable-tub-cut-1.png') }}" alt="Home2stay Convertible Tub Cut" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Convertible Tub Cut</h3>
                    <p class="text-gray-600 mb-4">The Convertible Tub Cut allows your family to enjoy both a step-in shower and a full bath. You can easily shift between the two thanks to its waterproof removable plug center. the simple transition from a step-in shower to a full bath.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6">
                    <img src="{{ asset('bathsafety-cat/CleanCut-Step-V1-e1503607014281.jpg') }}" alt="Home2stay Tub Cut Step" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Tub Cut Step</h3>
                    <p class="text-gray-600 mb-4">This product is the easiest way to convert your existing tub unto a step-in shower. Its non-skid step pad reduced the possibility of accidents when stepping in and out of your bathtub.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6">
                    <img src="{{ asset('bathsafety-cat/CleanCut-Door-Open.jpg') }}" alt="Home2stay Tub Cut Ultra-Low" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Tub Cut Ultra-Low</h3>
                    <p class="text-gray-600 mb-4">For deeper bathtubs, you can get the Home2stay Tub Cut Ultra-Low. This is ideal for high-profile tubs at least 14.75” tall.</p>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6">
                    <img src="{{ asset('bathsafety-cat/CleanCut-Convertible-wPlug-V3-e1503607459913.jpg') }}" alt="Home2stay Full Convertible Tub Cut Kit" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Full Convertible Tub Cut Kit</h3>
                    <p class="text-gray-600 mb-4">Our Full Convertible Tub Cut Kit has everything you need to convert your current bathtub into a step-in shower while keeping it in good working order. It only takes a few seconds to convert back and forth. This kit provides greater slip and fall protection than an unmodified tub while giving the entire family maximum flexibility.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Home2stay Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Why Home2stay is the Best Service Provider for Tub Cut Outs</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Home2stay goes above and beyond to provide customers with both products and services for their accessible homes. Here is why you should trust us to provide you with the best tub cut outs in Canada.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">No-Obligation Assessment</h3>
                    <p class="text-gray-600">If you’re unsure of where to start for your accessible home and bathroom, you can apply for a free no-obligation assessment with us here at Home2stay. This can be done on a personal visit or through a video call. We’ll assess which tub cut is best based on your needs and your existing tub.</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Customized Quote</h3>
                    <p class="text-gray-600">After the free assessment is done, we will send the client a quote with personalized suggestions for your tub cut out in Canada as well as other products we think will help you with your accessible bathroom. This quote will usually be sent to the client within 2 business days, giving them time to look over the suggestions.</p>
                </div>
                 <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Home2stay Express</h3>
                    <p class="text-gray-600">We also offer an express service for tub cuts in Canada. This allows customers to schedule installation for the next day if they submit their booking form before noon. However, customers should still note that this is subject to our technician’s availability.</p>
                </div>
                <div class="bg-gray-50 rounded-xl shadow-md p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">After-Sales Services</h3>
                    <p class="text-gray-600">After your tub cut is installed, we make sure to orient our customers, their family members, and caregivers on how to properly use the product. On top of that, we also provide repair and maintenance services during the duration of the contract.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6">Get Your Tub Cut Out in Canada from Home2stay Today!</h2>
                <p class="text-xl mb-8">Our team here are Home2stay works closely with our customers to help create accessible homes. This includes your tub cut installations. Let’s work together to make your bathroom safe and convenient for all types of people. Contact Home2stay so that we can discuss your specific needs, or directly call us today at (604) 259-1211!</p>
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
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Frequently Asked Questions About Home2stay’s Tub Cut Outs in Canada</h2>
            <p class="text-lg text-center text-gray-600 mb-12 max-w-3xl mx-auto">Home2stay provides tub cut outs for homes in Canada. To help you understand this product a little bit more, we’ve listed some frequently asked questions.</p>
            
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">How long does it take to install a tub cut out?</h3>
                    <p class="text-gray-600">The installation process typically takes between 2 to 4 hours, depending on the complexity of the job. Rest assured, our technicians are well-experienced in this installation.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Can any type of bathtub be modified with a tub cut out?</h3>
                    <p class="text-gray-600">Most types of bathtubs can be modified with a tub cut out. However, it is important to consult with us here at Home2stay if the product you want is compatible with your existing tub.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Can I cut my oval tub?</h3>
                    <p class="text-gray-600">Yes, you definitely can. Our tub cuts are compatible with tubs of different shapes and sizes.</p>
                </div>
            </div>
        </div>
    </section>
@endsection 