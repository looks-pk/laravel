@extends('layouts.app')

@section('title', 'Access Home Glide Straight Stairlift - Home2Stay')
@section('meta_description', 'Access Home Glide Straight Stairlift: smooth, safe, and intuitive mobility for straight staircases with Home2Stay support.')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-16 pb-12 md:pt-24 md:pb-16 bg-gradient-to-r from-primary to-primary-dark text-white">
        <div class="container mx-auto px-4">
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
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('products.index') }}" class="ml-1 text-white hover:text-gray-200">
                                    Products
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('products.category', 'stair-lifts') }}"
                                    class="ml-1 text-white hover:text-gray-200">
                                    Stair Lifts
                                </a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ml-1 font-medium text-gray-100">Access Home Glide Straight Stairlift</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Access Home Glide Straight Stairlift</h1>
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <span class="ml-2 text-sm ">Based on reviews</span>
                </div>

            </div>
        </div>
    </section>

    <!-- Product Details -->
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Product Image Gallery -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img src="{{ asset('bathsafety-cat/Stair-Lifts-cat-image-min.jpg') }}"
                            alt="Access Home Glide Straight Stairlift" class="w-full h-auto object-contain p-4">
                    </div>
                    <!-- Request Quote Button -->
                    <div class="text-center mt-4 mb-6">
                        <button id="quoteRequestBtn"
                            class="px-6 py-3 bg-secondary text-white font-medium rounded-lg hover:bg-secondary-dark transition duration-300">
                            Request A Quote
                        </button>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="w-full lg:w-1/2">
                    <div class="mb-6 space-y-4 text-gray-700 leading-relaxed">
                        <p>Effortless Mobility, Everyday Safety</p>
                        <p>The Access Home Glide Straight Stairlift by Home2Stay is designed to restore independence, safety, and comfort within your home. Built with precision engineering and intuitive controls, this stairlift delivers a smooth, quiet, and reliable ride, making everyday movement between floors effortless. Perfect for straight staircases, the Access Home Glide blends modern design with advanced safety features to ensure peace of mind for you and your loved ones.</p>
                        <div class="space-y-3">
                            <h3 class="text-xl font-semibold text-gray-800">Why Choose the Access Home Glide from Home2Stay?</h3>
                            <p>We pair thoughtful ergonomics with dependable hardware so you can enjoy confident, comfortable travel on every trip up or down the stairs.</p>
                        </div>
                    </div>
                    <div class="mb-6 p-4 bg-green-50 border-l-4 border-green-400 rounded-r-lg">
                        <h3 class="font-semibold text-green-800 mb-2">Pricing:</h3>
                        <div class="space-y-1 text-green-700">
                            <p><strong>Contact us for pricing</strong> + installation</p>
                        </div>
                    </div>
                    <div class="mb-6 p-4 bg-blue-50 border-l-4 border-blue-400 rounded-r-lg">
                        <p class="text-blue-800 font-medium">
                            CONTACT US for a price quote customized to your needs. This product is available for sale with professional installation.
                        </p>
                    </div>

                    <!-- Product Tabs Section -->
                    <div class="mb-8 product-tabs">
                        <!-- Tab Navigation -->
                        <div class="mb-6">
                            <ul class="flex flex-wrap text-sm font-medium text-center border-b border-gray-200">
                                <li class="mr-2 mb-2">
                                    <button
                                        class="tab-button active inline-block p-4 border border-primary rounded-t-lg bg-white text-primary"
                                        data-target="features-tab">
                                        Features
                                    </button>
                                </li>
                                <li class="mr-2 mb-2">
                                    <button
                                        class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100"
                                        data-target="pricing-tab">
                                        Pricing Options
                                    </button>
                                </li>
                                <li class="mr-2 mb-2">
                                    <button
                                        class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100"
                                        data-target="images-tab">
                                        More Images
                                    </button>
                                </li>
                                <li>
                                    <button
                                        class="tab-button inline-block p-4 border border-gray-200 rounded-t-lg bg-gray-50 hover:text-gray-600 hover:bg-gray-100"
                                        data-target="technical-tab">
                                        Technical Information
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <!-- Tab Content -->
                        <div class="tab-content-container">
                            <!-- Features Tab -->
                            <div class="tab-pane active" data-tab="features-tab" style="display: block !important;">
                                <div class="space-y-8 text-gray-700 leading-relaxed">
                                    <div class="space-y-3">
                                        <h3 class="text-xl font-semibold text-gray-800">Key Features &amp; Benefits</h3>
                                        <ul class="space-y-3 list-disc list-inside">
                                            <li><strong>Intuitive Joystick Control:</strong> The ergonomically designed soft-touch joystick is easy to use and requires minimal effort. Apply gentle pressure to move smoothly up or down the stairs, making it ideal for users with limited strength or dexterity.</li>
                                            <li><strong>Retractable Seatbelt for Enhanced Safety:</strong> A one-hand-operated retractable seatbelt keeps you securely seated during travel. An integrated safety sensor ensures the stairlift will only operate when the seatbelt is correctly fastened, providing an added layer of protection.</li>
                                            <li><strong>Folding Rail for Space Efficiency:</strong> If your staircase has an obstruction at the bottom, the optional automatic folding rail is the perfect solution. After use, the lift returns to the top landing and the lower rail folds away automatically, keeping hallways and doorways clear.</li>
                                            <li><strong>Optional Call Device for Connectivity:</strong> Stay connected at all times with the optional onboard call device, allowing you to store and dial up to three telephone numbers directly from the stairlift. This feature offers reassurance and quick access to family or caregivers when needed.</li>
                                            <li><strong>Powered Swivel Seat for Safe Transfers:</strong> With the Access Home Glide Extra Package, the powered swivel seat automatically turns at the top landing while you maintain pressure on the joystick. This ensures a safe, stable, and comfortable exit away from the staircase.</li>
                                            <li><strong>Linked Footrest for Effortless Use:</strong> The powered linked footrest folds and unfolds together with the seat, eliminating the need to bend down. This thoughtful feature reduces strain on the back, knees, and hips, perfect for users with mobility challenges.</li>
                                            <li><strong>Ergonomic Seat Design:</strong> Designed by ergonomic specialists, the moulded ergonomic seat promotes correct posture while maximizing comfort during travel. With the Extra Package, users can select from four seat height options for a customized and supportive fit.</li>
                                            <li><strong>Simple Remote &amp; Advanced Safety Technology:</strong> The Access Home Glide features a simple remote control and patented multi-drive friction technology, ensuring continued operation even in the unlikely event of a motor issue.</li>
                                        </ul>
                                        <p>An emergency stop button is conveniently located under the seat for added security.</p>
                                    </div>
                                    <div class="space-y-4">
                                        <h3 class="text-xl font-semibold text-gray-800">Frequently Asked Questions</h3>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800">How does a stairlift work?</h4>
                                            <p>A stairlift consists of a chair that travels along a rail securely fixed to the staircase treads. Using a joystick or control, the motor gently moves the chair up or down the stairs.</p>
                                        </div>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800">How much does an Access Home Glide stairlift cost?</h4>
                                            <p>Pricing varies depending on features and options. Home2Stay offers free in-home assessments to provide accurate pricing with no obligation.</p>
                                        </div>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800">Is funding available for stairlifts?</h4>
                                            <p>In some cases, government or mobility assistance programs may offer funding. Our Home2Stay specialists can help guide you through available options.</p>
                                        </div>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800">Does insurance cover stairlifts?</h4>
                                            <p>Most private insurance plans do not cover stairlifts, but exceptions may apply. We recommend checking with your provider.</p>
                                        </div>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800">How long does installation take?</h4>
                                            <p>Most straight stairlifts are installed within a few hours, with the least possible disturbance to your home.</p>
                                        </div>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800">How long do stairlift batteries last?</h4>
                                            <p>Stairlift batteries usually last 3â€“5 years, depending on usage and maintenance.</p>
                                        </div>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800">Am I required to buy after the free assessment?</h4>
                                            <p>No. Our free assessment is completely obligation-free.</p>
                                        </div>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800">Can I rent a stairlift?</h4>
                                            <p>Rental options may be available depending on your needs. Contact Home2Stay for details.</p>
                                        </div>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800">Will installation damage my staircase or walls?</h4>
                                            <p>No. Stairlifts are mounted to the stair treads, not the wall, and can be removed with less impact.</p>
                                        </div>
                                        <div class="space-y-2">
                                            <h4 class="font-semibold text-gray-800">Does a stairlift need exceptional electrical work?</h4>
                                            <p>No special wiring is required. The stairlift plugs into a standard household outlet.</p>
                                        </div>
                                    </div>
                                    <div class="space-y-3">
                                        <h3 class="text-xl font-semibold text-gray-800">Book Your Free Home Assessment Today</h3>
                                        <p>Your safety and independence come first. Contact us today to schedule a free, no-obligation in-home assessment and discover how the Access Home Glide Straight Stairlift can help you stay comfortably in the home you love.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Pricing Options Tab -->
                            <div class="tab-pane" data-tab="pricing-tab" style="display: none !important;">
                                <div class="space-y-6">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Pricing Options</h3>

                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Custom Pricing</h4>
                                        <p class="text-gray-700">Every Access Home Glide Straight Stairlift is tailored to your staircase layout, seating preferences, and optional safety upgrades. Schedule a free assessment to receive an accurate quote that includes professional installation.</p>
                                    </div>

                                    <div class="p-4 bg-green-50 border-l-4 border-green-400 rounded-r-lg">
                                        <p class="text-green-800 font-medium">
                                            Contact us for a price quote customized to your needs. Professional installation and comprehensive warranty included.
                                        </p>
                                    </div>

                                    <div class="p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded-r-lg">
                                        <p class="text-yellow-800 font-medium">
                                            Choose the Access Home Glide Straight Stairlift for smooth, safe travel on straight staircases with dedicated Home2Stay support every step of the way.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- More Images Tab -->
                            <div class="tab-pane" data-tab="images-tab" style="display: none !important;">
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                    <div class="image-thumbnail cursor-pointer">
                                        <img src="{{ asset('bathsafety-cat/Stair-Lifts-cat-image-min.jpg') }}"
                                            alt="Access Home Glide Straight Stairlift"
                                            class="w-full h-32 object-contain rounded-lg hover:opacity-90 transition duration-200 p-2 bg-gray-50">
                                    </div>
                                    <div class="image-thumbnail cursor-pointer">
                                        <img src="{{ asset('bathsafety-cat/1100stairlift9.jpg') }}"
                                            alt="Access Home Glide detail"
                                            class="w-full h-32 object-contain rounded-lg hover:opacity-90 transition duration-200 p-2 bg-gray-50">
                                    </div>
                                    <div class="image-thumbnail cursor-pointer">
                                        <img src="{{ asset('bathsafety-cat/elan-image-3.jpg') }}"
                                            alt="Access Home Glide closeup"
                                            class="w-full h-32 object-contain rounded-lg hover:opacity-90 transition duration-200 p-2 bg-gray-50">
                                    </div>
                                    <div class="image-thumbnail cursor-pointer">
                                        <img src="{{ asset('bathsafety-cat/elan-image-4.jpg') }}"
                                            alt="Access Home Glide seating"
                                            class="w-full h-32 object-contain rounded-lg hover:opacity-90 transition duration-200 p-2 bg-gray-50">
                                    </div>
                                </div>
                            </div>

                            <!-- Technical Information -->
                            <div class="tab-pane" data-tab="technical-tab" style="display: none !important;">
                                <div class="mb-6">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Technical Specifications</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="space-y-3">
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Model:</span>
                                                <span class="text-gray-600">Access Home Glide Straight Stairlift</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Control Style:</span>
                                                <span class="text-gray-600">Soft-touch joystick with gentle pressure operation</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Seat Design:</span>
                                                <span class="text-gray-600">Ergonomic moulded seat with up to four height options (Extra Package)</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Seatbelt:</span>
                                                <span class="text-gray-600">One-hand retractable belt with interlock sensor</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Rail Options:</span>
                                                <span class="text-gray-600">Standard straight rail with optional automatic folding rail</span>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Power Source:</span>
                                                <span class="text-gray-600">Built-in batteries with patented multi-drive friction technology</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Swivel Seat:</span>
                                                <span class="text-gray-600">Powered swivel (Extra Package) rotates while joystick is held</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Footrest:</span>
                                                <span class="text-gray-600">Powered linked footrest folds/unfolds with the seat</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Connectivity:</span>
                                                <span class="text-gray-600">Optional onboard call device stores up to three numbers</span>
                                            </div>
                                            <div class="flex justify-between border-b pb-2">
                                                <span class="font-medium text-gray-700">Emergency Controls:</span>
                                                <span class="text-gray-600">Under-seat emergency stop button for fast response</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-3">Product Features</h4>
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <ul class="text-gray-700 text-sm leading-relaxed space-y-2">
                                            <li>â€¢ Soft-touch joystick with smooth, quiet travel</li>
                                            <li>â€¢ Retractable seatbelt interlock for added protection</li>
                                            <li>â€¢ Optional automatic folding rail keeps hallways clear</li>
                                            <li>â€¢ Optional onboard call device dials up to three numbers</li>
                                            <li>â€¢ Powered swivel seat (Extra Package) for safe exits</li>
                                            <li>â€¢ Powered linked footrest folds and unfolds with the seat</li>
                                            <li>â€¢ Ergonomic seat sculpted by specialists with multiple height choices</li>
                                            <li>â€¢ Simple remote control plus multi-drive friction technology for redundancy</li>
                                            <li>â€¢ Under-seat emergency stop button for instant peace of mind</li>
                                            <li>â€¢ Free, no-obligation Home2Stay assessment and installation guidance</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="mb-8">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Pricing</h3>
                                            <span class="text-sm text-gray-800">Contact us for pricing</span>
                                        </div>
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-xl font-semibold text-gray-800">Call Us</h3>
                                            <a href="tel:+16042591211" class="text-secondary">
                                                <span class="text-sm text-gray-800">604-259-1211</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Modal -->
    <div id="imageModal"
        class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-75 flex items-center justify-center p-4">
        <div class="relative bg-white rounded-lg max-w-4xl w-full mx-auto">
            <button id="closeModal"
                class="absolute top-2 right-2 text-white hover:text-gray-300 bg-gray-800 bg-opacity-75 hover:bg-opacity-100 p-1 rounded-full transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="p-4">
                <img id="modalImage" src="" alt="Large product image" class="w-full h-auto">
            </div>
        </div>
    </div>

    <!-- Featured Product -->
    <section class="py-16 bg-primary">
        <div class="container mx-auto px-4">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg">
                <div class="flex flex-col lg:flex-row">
                    <!-- Text Content -->
                    <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Are you interested in having this product
                            installed?</h2>
                        <p class="text-lg text-gray-600 mb-6">Accessibility solutions to make everyday home life easier and
                            safer for yourself and your loved ones.</p>
                        <p class="mb-5">Give us a call at <a href="tel:+16042591211" style="color: red; font-weight: bold;">604-259-1211</a>
                            or submit a FREE <a href="#assessment" style="color: red; font-weight: bold;">ASSESSMENT FORM</a> to check.</p>
                    </div>
                    <!-- Image -->
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('bathsafety-cat/Stair-Lifts-cat-image-min.jpg') }}" alt="Bathroom Safety Solutions"
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
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
                        @if($post->featured_image)
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                        @else
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-400 text-2xl"><i class="fas fa-image"></i></span>
                            </div>
                        @endif

                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span class="mr-4">
                                    <i class="fas fa-calendar-alt mr-1"></i>
                                    {{ $post->published_at ? $post->published_at->format('F j, Y') : $post->created_at->format('F j, Y') }}
                                </span>
                                <span>
                                    <i class="fas fa-user mr-1"></i> {{ $post->user->name ?? 'Admin' }}
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-primary transition-colors">
                                {{ $post->title }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                            <a href="{{ route('blog.show', $post->slug) }}"
                                class="inline-flex items-center text-primary hover:text-primary/80 font-medium">
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
                    <a href="{{ route('blog.index') }}"
                        class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                        View All Blog Posts
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Get Your Free Quote Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8 md:p-12">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Get Your Free Quote</h2>
                    <p class="text-gray-600">We're here to listen, help and provide insights. Tell us what you need â€“ We
                        would love to hear from you!</p>
                </div>

                <form action="/submit-product-inquiry" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="product" value="Access Home Glide Straight Stairlift">

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
                            <label class="block text-gray-700 font-medium mb-2" for="location">Your Location</label>
                            <input type="text" id="location" name="location"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>

                    <!-- Interest Type -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Interest Type: *</label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="interest_type" value="purchase" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Purchase Product</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="interest_type" value="assessment" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Assessment Only</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="interest_type" value="both" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Both Assessment and Purchase</span>
                            </label>
                        </div>
                    </div>

                    <!-- Express Delivery Option -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Delivery Preference:</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="delivery_preference" value="standard" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Standard Delivery</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="delivery_preference" value="next_day" class="text-primary">
                                <span class="text-gray-700" style="margin-left: 5px;">Next-Day Express Delivery</span>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2" for="message">Additional Information</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Please describe your straight staircase, mobility needs, or any questions about the Access Home Glide Straight Stairlift."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                            Submit Quote Request
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

    <!-- Assessment Form Section -->
    <section id="assessment" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Are You Interested Having This Product
                    Installed</h2>
                <p class="text-lg text-center text-gray-600 mb-8">We are Here For You - We're here to listen, help and
                    provide insights.</p>

                <div class="text-center">
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">
                        Contact Us for Assessment
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
    </section>

    <!-- Quote Request Modal -->
    <div id="quoteRequestModal"
        class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-75 flex items-center justify-center p-4">
        <div class="relative bg-white rounded-lg max-w-2xl w-full mx-auto max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="bg-primary text-white p-4 rounded-t-lg flex justify-between items-center sticky top-0 z-10">
                <h3 class="text-xl font-bold">Request a Quote</h3>
                <button id="closeQuoteModal" class="text-white hover:text-gray-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6">
                <form id="quoteRequestForm" action="/submit-product-inquiry" method="POST">
                    @csrf
                    <input type="hidden" id="product_name" name="product_name" value="Access Home Glide Straight Stairlift">

                    <!-- Product Info Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-4 text-primary">Product Information</h4>
                        <div class="p-3 bg-gray-50 rounded-lg mb-4">
                            <p>You're requesting a quote for: <span class="font-semibold text-primary">Access Home Glide Straight Stairlift</span></p>
                        </div>
                    </div>

                    <!-- Delivery Options -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">Delivery Options</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="delivery_preference" value="standard" class="mr-2" checked>
                                <span>Standard Delivery</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="delivery_preference" value="next_day" class="mr-2">
                                <span>Next-Day Express Delivery</span>
                            </label>
                        </div>
                    </div>

                    <!-- Interest Type Section -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-3 text-primary">What type of service are you interested in?</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="interest_type" value="purchase" class="mr-2" checked>
                                <span>Purchase Product</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="interest_type" value="assessment" class="mr-2">
                                <span>Assessment Only</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="interest_type" value="both" class="mr-2">
                                <span>Both Assessment and Purchase</span>
                            </label>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold mb-4 text-primary">Your Contact Information</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First
                                    Name*</label>
                                <input type="text" id="firstName" name="first_name" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last
                                    Name*</label>
                                <input type="text" id="lastName" name="last_name" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div class="mt-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number*</label>
                            <input type="tel" id="phone" name="phone" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>

                        <div class="mt-4">
                            <label for="comments" class="block text-sm font-medium text-gray-700 mb-1">Additional
                                Details</label>
                            <textarea id="comments" name="comments" rows="3"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Please describe your straight staircase, mobility needs, or any questions about the Access Home Glide Straight Stairlift."></textarea>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button type="submit"
                            class="bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded-md font-medium transition duration-300">
                            Submit Quote Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .tab-pane {
            display: none;
        }

        .tab-pane.active {
            display: block;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Force initial correct state
            document.querySelectorAll('.tab-pane').forEach(function (pane) {
                if (pane.classList.contains('active')) {
                    pane.style.display = 'block';
                } else {
                    pane.style.display = 'none';
                }
            });

            // Initialize product tabs
            const tabButtons = document.querySelectorAll('.tab-button');

            tabButtons.forEach(function (button) {
                button.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('data-target');

                    // Update button states
                    tabButtons.forEach(function (btn) {
                        if (btn.getAttribute('data-target') === targetId) {
                            btn.classList.add('active', 'border-primary', 'text-primary', 'bg-white');
                            btn.classList.remove('border-gray-200', 'bg-gray-50', 'hover:text-gray-600', 'hover:bg-gray-100');
                        } else {
                            btn.classList.remove('active', 'border-primary', 'text-primary', 'bg-white');
                            btn.classList.add('border-gray-200', 'bg-gray-50', 'hover:text-gray-600', 'hover:bg-gray-100');
                        }
                    });

                    // Show target tab content, hide others
                    document.querySelectorAll('.tab-pane').forEach(function (pane) {
                        if (pane.getAttribute('data-tab') === targetId) {
                            pane.style.display = 'block';
                        } else {
                            pane.style.display = 'none';
                        }
                    });
                });
            });

            // Image modal functionality
            const imageModal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const closeModal = document.getElementById('closeModal');

            // Add click handlers to all image thumbnails
            const imageThumbnails = document.querySelectorAll('.image-thumbnail');

            if (imageThumbnails.length > 0 && imageModal) {
                imageThumbnails.forEach(function (thumbnail) {
                    thumbnail.addEventListener('click', function () {
                        const imgSrc = this.querySelector('img').src;
                        const imgAlt = this.querySelector('img').alt;

                        modalImage.src = imgSrc;
                        modalImage.alt = imgAlt;
                        imageModal.classList.remove('hidden');
                        document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
                    });
                });

                closeModal.addEventListener('click', function () {
                    imageModal.classList.add('hidden');
                    document.body.style.overflow = 'auto'; // Re-enable scrolling
                });

                // Close modal when clicking outside of image
                imageModal.addEventListener('click', function (event) {
                    if (event.target === imageModal) {
                        imageModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });

                // Close modal with Escape key
                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape' && !imageModal.classList.contains('hidden')) {
                        imageModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });
            }

            // Quote Request Modal Functionality
            const quoteRequestBtn = document.getElementById('quoteRequestBtn');
            const quoteRequestModal = document.getElementById('quoteRequestModal');
            const closeQuoteModal = document.getElementById('closeQuoteModal');
            const quoteRequestForm = document.getElementById('quoteRequestForm');

            if (quoteRequestBtn && quoteRequestModal) {
                // Open quote modal
                quoteRequestBtn.addEventListener('click', function () {
                    quoteRequestModal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
                });

                // Close quote modal on button click
                closeQuoteModal.addEventListener('click', function () {
                    quoteRequestModal.classList.add('hidden');
                    document.body.style.overflow = 'auto'; // Re-enable scrolling
                });

                // Close quote modal when clicking outside
                quoteRequestModal.addEventListener('click', function (event) {
                    if (event.target === quoteRequestModal) {
                        quoteRequestModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });

                // Close quote modal with Escape key
                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape' && !quoteRequestModal.classList.contains('hidden')) {
                        quoteRequestModal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });

                // Handle form submission
                if (quoteRequestForm) {
                    quoteRequestForm.addEventListener('submit', function (e) {
                        e.preventDefault();
                        var form = this;
                        var formData = new FormData(this);
                        fetch('/submit-product-inquiry', {
                            method: 'POST',
                            body: formData,
                        }).then(function() {
                            form.reset();
                            quoteRequestModal.classList.add('hidden');
                            document.body.style.overflow = 'auto';
                            showFlash('Thank you! Your quote request has been submitted. We will contact you shortly.');
                        }).catch(function() {
                            showFlash('Sorry, there was an error submitting your request. Please try again.', 'error');
                        });
                    });
                }
            }
        });
    </script>
@endpush


