<!-- Sidebar Cards Builder -->
<div class="sidebar-cards-section" x-data="sidebarCardsBuilder()">
    <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
        </svg>
        Sidebar Product Cards
    </h3>
    <p class="text-gray-600 text-sm mb-6">Add up to 4 product cards to showcase relevant products in the blog sidebar.</p>
    
    <!-- Cards Container -->
    <div id="sidebar-cards-container" class="space-y-4">
        <template x-for="(card, index) in cards" :key="index">
            <div class="sidebar-card bg-white border border-gray-200 rounded-xl p-6 relative" :data-index="index">
                <!-- Remove Button -->
                <button type="button" @click="removeCard(index)" 
                    class="absolute top-4 right-4 text-red-500 hover:text-red-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Image Upload -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Product Image</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center hover:border-blue-400 transition-colors">
                            <div x-show="!card.image" class="text-gray-500">
                                <svg class="mx-auto h-12 w-12 text-gray-400 mb-2" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <label class="cursor-pointer">
                                    <span class="text-sm font-medium text-gray-900">Upload Image</span>
                                    <input type="file" class="sr-only" accept="image/*" @change="handleImageUpload($event, index)">
                                </label>
                                <p class="text-xs text-gray-500 mt-1">PNG, JPG up to 2MB</p>
                            </div>
                            <div x-show="card.image" class="relative">
                                <img :src="card.image" alt="Product preview" class="max-h-24 mx-auto rounded-lg">
                                <button type="button" @click="card.image = ''" 
                                    class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs hover:bg-red-600">
                                    ×
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Details -->
                    <div class="space-y-4">
                        <!-- Title -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Product Title</label>
                            <input type="text" x-model="card.title" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter product title">
                        </div>

                        <!-- Description -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Short Description</label>
                            <textarea x-model="card.description" rows="3"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"
                                placeholder="Brief product description..."></textarea>
                        </div>

                        <!-- Link -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Product Link</label>
                            <input type="url" x-model="card.link" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="https://example.com/product">
                        </div>
                    </div>
                </div>

                <!-- Preview -->
                <div x-show="card.title || card.description" class="mt-4 pt-4 border-t border-gray-200">
                    <h5 class="text-sm font-medium text-gray-600 mb-2">Preview:</h5>
                    <div class="bg-gray-50 rounded-lg p-3 text-sm">
                        <div class="flex items-start space-x-3">
                            <div x-show="card.image" class="flex-shrink-0">
                                <img :src="card.image" alt="Preview" class="w-12 h-12 object-cover rounded">
                            </div>
                            <div class="flex-1">
                                <h6 x-text="card.title || 'Product Title'" class="font-medium text-gray-900 mb-1"></h6>
                                <p x-text="card.description || 'Product description...'" class="text-gray-600 text-xs leading-relaxed"></p>
                                <a x-show="card.link" :href="card.link" target="_blank" 
                                    class="inline-flex items-center text-blue-600 hover:text-blue-800 text-xs mt-1">
                                    View Product
                                    <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <!-- Add Card Button -->
    <button type="button" @click="addCard()" x-show="cards.length < 4"
        class="w-full mt-4 bg-blue-50 hover:bg-blue-100 border-2 border-dashed border-blue-300 hover:border-blue-400 rounded-xl p-6 text-blue-600 hover:text-blue-700 transition-all duration-200 flex items-center justify-center">
        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
        </svg>
        Add Product Card (<span x-text="cards.length"></span>/4)
    </button>

    <!-- Hidden Input for Form Submission -->
    <input type="hidden" name="sidebar_cards" id="sidebar-cards-input" x-model="cardsJson">
</div>

<script>
function sidebarCardsBuilder() {
    return {
        cards: @json($blog->sidebar_cards ?? []),
        
        get cardsJson() {
            return JSON.stringify(this.cards);
        },
        
        addCard() {
            if (this.cards.length < 4) {
                this.cards.push({
                    image: '',
                    title: '',
                    description: '',
                    link: ''
                });
            }
        },
        
        removeCard(index) {
            this.cards.splice(index, 1);
        },
        
        handleImageUpload(event, index) {
            const file = event.target.files[0];
            if (file) {
                if (file.size > 2 * 1024 * 1024) { // 2MB limit
                    alert('File size must be less than 2MB');
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.cards[index].image = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    }
}
</script>

<style>
.sidebar-cards-section .sidebar-card {
    animation: slideIn 0.3s ease-out;
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style> 