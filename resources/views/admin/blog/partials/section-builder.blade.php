<style>
    /* Section builder styling */
    #section-builder .quill-editor-container {
        display: flex;
        flex-direction: column;
        max-width: 100%;
    }
    
    #section-builder .quill-editor-container .ql-toolbar {
        flex: 0 0 auto;
        z-index: 2;
        border-bottom: 1px solid #e2e8f0;
        border-top-left-radius: 0.375rem;
        border-top-right-radius: 0.375rem;
    }
    
    #section-builder .quill-editor-container .ql-container {
        flex: 1 1 auto;
        border: none;
        display: flex;
        flex-direction: column;
        border-bottom-left-radius: 0.375rem;
        border-bottom-right-radius: 0.375rem;
    }
    
    #section-builder .quill-editor-container .ql-editor {
        flex: 1 1 auto;
        overflow-y: auto;
        word-break: break-word;
    }
    
    #section-builder .section {
        break-inside: avoid;
        page-break-inside: avoid;
    }
    
    /* Column specific styling */
    #section-builder .section-two-column .col,
    #section-builder .section-three-column .col {
        min-width: 0; /* Ensure flex items can shrink below content size */
    }
    
    /* Text-image section styling */
    #section-builder .section-content[data-layout="text-image"] .text-col,
    #section-builder .section-content[data-layout="image-text"] .text-col {
        min-width: 0;
    }
</style>

<div id="section-builder" class="w-full">
    <div class="mb-4">
        <h3 class="text-lg font-medium text-gray-800 mb-2">Dynamic Sections</h3>
        <p class="text-sm text-gray-600 mb-4">Add dynamic sections to your blog post with different layouts.</p>
        
        <!-- Top controls - sticky -->
        <div class="sticky top-0 z-50 bg-white py-2 border-b border-gray-200 mb-4" id="top-section-controls">
            <div class="flex flex-wrap gap-2">
                <button type="button" onclick="addSection('one-column')" class="px-3 py-2 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700 transition-colors">
                    <i class="fas fa-columns mr-1"></i> Add 1-Column
                </button>
                <button type="button" onclick="addSection('two-column')" class="px-3 py-2 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700 transition-colors">
                    <i class="fas fa-columns mr-1"></i> Add 2-Column
                </button>
                <button type="button" onclick="addSection('three-column')" class="px-3 py-2 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700 transition-colors">
                    <i class="fas fa-columns mr-1"></i> Add 3-Column
                </button>
                <button type="button" onclick="addSection('text-image')" class="px-3 py-2 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700 transition-colors">
                    <i class="fas fa-image mr-1"></i> Add Text+Image
                </button>
            </div>
        </div>
        
        <div id="sections-container" class="space-y-6">
            <!-- Sections will be added here dynamically -->
        </div>

        <!-- Bottom controls for easy access -->
        <div class="mt-6 pt-4 border-t border-gray-200" id="bottom-section-controls">
            <p class="text-sm text-gray-600 mb-2">Add more sections:</p>
            <div class="flex flex-wrap gap-2">
                <button type="button" onclick="addSection('one-column')" class="px-3 py-2 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700 transition-colors">
                    <i class="fas fa-columns mr-1"></i> Add 1-Column
                </button>
                <button type="button" onclick="addSection('two-column')" class="px-3 py-2 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700 transition-colors">
                    <i class="fas fa-columns mr-1"></i> Add 2-Column
                </button>
                <button type="button" onclick="addSection('three-column')" class="px-3 py-2 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700 transition-colors">
                    <i class="fas fa-columns mr-1"></i> Add 3-Column
                </button>
                <button type="button" onclick="addSection('text-image')" class="px-3 py-2 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700 transition-colors">
                    <i class="fas fa-image mr-1"></i> Add Text+Image
                </button>
            </div>
        </div>

        <!-- Hidden input to store sections data -->
        <input type="hidden" name="sections" id="sections-input">
    </div>
</div>

<script>
// Section templates
const sectionTemplates = {
    'one-column': `
        <div class="section bg-white border rounded-lg p-4" data-type="one-column">
            <div class="flex justify-between items-center mb-3 pb-2 border-b">
                <h4 class="font-medium">One Column Section</h4>
                <div class="section-actions flex space-x-2">
                    <button type="button" class="move-up-btn px-2 py-1 text-xs bg-gray-200 rounded hover:bg-gray-300">Move Up</button>
                    <button type="button" class="move-down-btn px-2 py-1 text-xs bg-gray-200 rounded hover:bg-gray-300">Move Down</button>
                    <button type="button" class="delete-section-btn px-2 py-1 text-xs bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                </div>
            </div>
            <div class="section-content">
                <div class="mb-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                    <div class="quill-editor-container overflow-hidden border border-gray-300 rounded-md">
                        <div class="quill-editor"></div>
                    </div>
                </div>
            </div>
        </div>
    `,
    'two-column': `
        <div class="section bg-white border rounded-lg p-4" data-type="two-column">
            <div class="flex justify-between items-center mb-3 pb-2 border-b">
                <h4 class="font-medium">Two Column Section</h4>
                <div class="section-actions flex space-x-2">
                    <button type="button" class="move-up-btn px-2 py-1 text-xs bg-gray-200 rounded hover:bg-gray-300">Move Up</button>
                    <button type="button" class="move-down-btn px-2 py-1 text-xs bg-gray-200 rounded hover:bg-gray-300">Move Down</button>
                    <button type="button" class="delete-section-btn px-2 py-1 text-xs bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                </div>
            </div>
            <div class="section-content grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Left Column</label>
                    <div class="quill-editor-container overflow-hidden border border-gray-300 rounded-md">
                        <div class="quill-editor"></div>
                    </div>
                </div>
                <div class="col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Right Column</label>
                    <div class="quill-editor-container overflow-hidden border border-gray-300 rounded-md">
                        <div class="quill-editor"></div>
                    </div>
                </div>
            </div>
        </div>
    `,
    'three-column': `
        <div class="section bg-white border rounded-lg p-4" data-type="three-column">
            <div class="flex justify-between items-center mb-3 pb-2 border-b">
                <h4 class="font-medium">Three Column Section</h4>
                <div class="section-actions flex space-x-2">
                    <button type="button" class="move-up-btn px-2 py-1 text-xs bg-gray-200 rounded hover:bg-gray-300">Move Up</button>
                    <button type="button" class="move-down-btn px-2 py-1 text-xs bg-gray-200 rounded hover:bg-gray-300">Move Down</button>
                    <button type="button" class="delete-section-btn px-2 py-1 text-xs bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                </div>
            </div>
            <div class="section-content grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Left Column</label>
                    <div class="quill-editor-container overflow-hidden border border-gray-300 rounded-md">
                        <div class="quill-editor"></div>
                    </div>
                </div>
                <div class="col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Middle Column</label>
                    <div class="quill-editor-container overflow-hidden border border-gray-300 rounded-md">
                        <div class="quill-editor"></div>
                    </div>
                </div>
                <div class="col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Right Column</label>
                    <div class="quill-editor-container overflow-hidden border border-gray-300 rounded-md">
                        <div class="quill-editor"></div>
                    </div>
                </div>
            </div>
        </div>
    `,
    'text-image': `
        <div class="section bg-white border rounded-lg p-4" data-type="text-image">
            <div class="flex justify-between items-center mb-3 pb-2 border-b">
                <h4 class="font-medium">Text + Image Section</h4>
                <div class="section-actions flex space-x-2">
                    <button type="button" class="move-up-btn px-2 py-1 text-xs bg-gray-200 rounded hover:bg-gray-300">Move Up</button>
                    <button type="button" class="move-down-btn px-2 py-1 text-xs bg-gray-200 rounded hover:bg-gray-300">Move Down</button>
                    <button type="button" class="layout-toggle-btn px-2 py-1 text-xs bg-purple-600 text-white rounded hover:bg-purple-700" data-layout="text-image">Swap Layout</button>
                    <button type="button" class="delete-section-btn px-2 py-1 text-xs bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                </div>
            </div>
            <div class="section-content grid grid-cols-1 md:grid-cols-2 gap-4" data-layout="text-image">
                <div class="text-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Text Content</label>
                    <div class="quill-editor-container overflow-hidden border border-gray-300 rounded-md">
                        <div class="quill-editor"></div>
                    </div>
                </div>
                <div class="image-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                    <div class="image-upload-container">
                        <div class="image-preview-area min-h-[200px] border border-dashed border-gray-300 rounded-lg flex items-center justify-center bg-gray-50 relative">
                            <input type="file" class="section-image-input absolute inset-0 opacity-0 cursor-pointer" accept="image/*">
                            <div class="text-center image-placeholder">
                                <i class="fas fa-image text-3xl text-gray-400 mb-2"></i>
                                <p class="text-sm text-gray-500">Click to upload an image</p>
                            </div>
                            <div class="image-preview hidden w-full h-full">
                                <img src="" alt="Preview" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="image-actions mt-2 flex justify-end">
                            <button type="button" class="remove-image-btn hidden px-2 py-1 text-xs bg-red-600 text-white rounded hover:bg-red-700">Remove Image</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `
};

// Initialize Sections
let sectionEditors = [];
let sectionImages = [];

// Add a new section
function addSection(type) {
    const container = document.getElementById('sections-container');
    const section = document.createElement('div');
    section.className = 'section-wrapper';
    section.innerHTML = sectionTemplates[type];
    container.appendChild(section);
    
    // Initialize events for the new section
    initSectionEvents(section);
    
    // Initialize Quill editors in the section
    initQuillEditors(section);
    
    // Initialize image uploads
    if (type === 'text-image') {
        initImageUpload(section);
    }
    
    // Update the sections data
    updateSectionsData();
}

// Initialize events for a section
function initSectionEvents(sectionWrapper) {
    const section = sectionWrapper.querySelector('.section');
    
    // Delete button
    const deleteBtn = section.querySelector('.delete-section-btn');
    deleteBtn.addEventListener('click', function() {
        if (confirm('Are you sure you want to delete this section?')) {
            sectionWrapper.remove();
            updateSectionsData();
        }
    });
    
    // Move Up button
    const moveUpBtn = section.querySelector('.move-up-btn');
    moveUpBtn.addEventListener('click', function() {
        const prev = sectionWrapper.previousElementSibling;
        if (prev) {
            sectionWrapper.parentNode.insertBefore(sectionWrapper, prev);
            updateSectionsData();
        }
    });
    
    // Move Down button
    const moveDownBtn = section.querySelector('.move-down-btn');
    moveDownBtn.addEventListener('click', function() {
        const next = sectionWrapper.nextElementSibling;
        if (next) {
            sectionWrapper.parentNode.insertBefore(next, sectionWrapper);
            updateSectionsData();
        }
    });
    
    // Toggle layout (for text-image sections)
    const layoutToggleBtn = section.querySelector('.layout-toggle-btn');
    if (layoutToggleBtn) {
        layoutToggleBtn.addEventListener('click', function() {
            const contentDiv = section.querySelector('.section-content');
            const currentLayout = contentDiv.getAttribute('data-layout');
            const newLayout = currentLayout === 'text-image' ? 'image-text' : 'text-image';
            
            contentDiv.setAttribute('data-layout', newLayout);
            layoutToggleBtn.setAttribute('data-layout', newLayout);
            
            // Swap the order of columns WITHOUT recreating them
            const textCol = contentDiv.querySelector('.text-col');
            const imageCol = contentDiv.querySelector('.image-col');
            
            if (newLayout === 'image-text') {
                contentDiv.insertBefore(imageCol, textCol);
            } else {
                contentDiv.insertBefore(textCol, imageCol);
            }
            
            updateSectionsData();
        });
    }
}

// Initialize Quill editors
function initQuillEditors(sectionWrapper) {
    const quillDivs = sectionWrapper.querySelectorAll('.quill-editor');
    
    quillDivs.forEach((div, index) => {
        const id = `editor-${Date.now()}-${index}`;
        div.id = id;
        
        // Set fixed height based on section type
        const section = sectionWrapper.querySelector('.section');
        const type = section.getAttribute('data-type');
        let editorHeight = '150px';
        
        if (type === 'one-column') {
            editorHeight = '200px';
        } else if (type === 'two-column') {
            editorHeight = '150px';
        } else if (type === 'three-column') {
            editorHeight = '120px';
        } else if (type === 'text-image') {
            editorHeight = '200px';
        }
        
        // Apply height style to the editor div
        div.style.height = editorHeight;
        
        const quill = new Quill(`#${id}`, {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'color': [] }, { 'background': [] }],
                    ['blockquote', 'code-block'],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    [{ 'indent': '-1' }, { 'indent': '+1' }],
                    [{ 'align': [] }],
                    ['link'],
                    ['clean']
                ]
            },
            bounds: div,
            scrollingContainer: div
        });
        
        // Fix Quill editor container styles
        const container = div.closest('.quill-editor-container');
        if (container) {
            // Get Quill toolbar and editor container
            const toolbar = container.querySelector('.ql-toolbar');
            const editorContainer = container.querySelector('.ql-container');
            
            if (toolbar) {
                // Move toolbar outside of the scrollable container
                container.insertBefore(toolbar, editorContainer);
            }
            
            // Set editor container styles
            if (editorContainer) {
                editorContainer.style.height = editorHeight;
                editorContainer.style.overflow = 'auto';
            }
        }
        
        // Store editor reference for later use
        sectionEditors.push({ id, quill });
        
        // Update data on text change
        quill.on('text-change', updateSectionsData);
    });
}

// Initialize image upload
function initImageUpload(sectionWrapper) {
    const imageUploadInput = sectionWrapper.querySelector('.section-image-input');
    const imagePreview = sectionWrapper.querySelector('.image-preview');
    const previewImg = imagePreview.querySelector('img');
    const placeholder = sectionWrapper.querySelector('.image-placeholder');
    const removeBtn = sectionWrapper.querySelector('.remove-image-btn');
    
    // Assign a unique data-index if not already set
    if (!sectionWrapper.hasAttribute('data-index')) {
        sectionWrapper.setAttribute('data-index', Date.now() + '-' + Math.random().toString(36).substr(2, 9));
    }
    
    // Handle file input change
    imageUploadInput.addEventListener('change', function(e) {
        if (this.files && this.files[0]) {
            const file = this.files[0];
            const reader = new FileReader();
            
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                imagePreview.classList.remove('hidden');
                placeholder.classList.add('hidden');
                removeBtn.classList.remove('hidden');
                
                // Store image data with section's unique index
                const index = sectionWrapper.getAttribute('data-index');
                
                // Remove any existing image data for this section first
                sectionImages = sectionImages.filter(img => img.index !== index);
                
                // Add the new image data
                sectionImages.push({
                    index,
                    data: e.target.result,
                    file: file
                });
                
                updateSectionsData();
            };
            
            reader.readAsDataURL(file);
        }
    });
    
    // Handle remove button
    removeBtn.addEventListener('click', function() {
        imageUploadInput.value = '';
        imagePreview.classList.add('hidden');
        placeholder.classList.remove('hidden');
        removeBtn.classList.add('hidden');
        
        // Remove stored image data
        const index = sectionWrapper.getAttribute('data-index');
        sectionImages = sectionImages.filter(img => img.index !== index);
        
        updateSectionsData();
    });
}

// Update the hidden input with sections data
function updateSectionsData() {
    const sections = [];
    const sectionWrappers = document.querySelectorAll('#sections-container .section-wrapper');
    
    sectionWrappers.forEach((wrapper, index) => {
        // Ensure each wrapper has a data-index
        if (!wrapper.hasAttribute('data-index')) {
            wrapper.setAttribute('data-index', Date.now() + '-' + Math.random().toString(36).substr(2, 9));
        }
        const dataIndex = wrapper.getAttribute('data-index');
        
        const section = wrapper.querySelector('.section');
        const type = section.getAttribute('data-type');
        
        let sectionData = {
            type: type,
            content: {}
        };
        
        // Get content based on section type
        if (type === 'one-column') {
            const editorDiv = section.querySelector('.quill-editor');
            const editorId = editorDiv.id;
            const editor = sectionEditors.find(e => e.id === editorId);
            
            if (editor) {
                sectionData.content = {
                    html: editor.quill.root.innerHTML
                };
            }
        } else if (type === 'two-column') {
            const editorDivs = section.querySelectorAll('.quill-editor');
            const leftEditorId = editorDivs[0].id;
            const rightEditorId = editorDivs[1].id;
            
            const leftEditor = sectionEditors.find(e => e.id === leftEditorId);
            const rightEditor = sectionEditors.find(e => e.id === rightEditorId);
            
            if (leftEditor && rightEditor) {
                sectionData.content = {
                    left: { html: leftEditor.quill.root.innerHTML },
                    right: { html: rightEditor.quill.root.innerHTML }
                };
            }
        } else if (type === 'three-column') {
            const editorDivs = section.querySelectorAll('.quill-editor');
            const leftEditorId = editorDivs[0].id;
            const middleEditorId = editorDivs[1].id;
            const rightEditorId = editorDivs[2].id;
            
            const leftEditor = sectionEditors.find(e => e.id === leftEditorId);
            const middleEditor = sectionEditors.find(e => e.id === middleEditorId);
            const rightEditor = sectionEditors.find(e => e.id === rightEditorId);
            
            if (leftEditor && middleEditor && rightEditor) {
                sectionData.content = {
                    left: { html: leftEditor.quill.root.innerHTML },
                    middle: { html: middleEditor.quill.root.innerHTML },
                    right: { html: rightEditor.quill.root.innerHTML }
                };
            }
        } else if (type === 'text-image') {
            const editorDiv = section.querySelector('.quill-editor');
            const editorId = editorDiv.id;
            const editor = sectionEditors.find(e => e.id === editorId);
            
            const contentDiv = section.querySelector('.section-content');
            const layout = contentDiv.getAttribute('data-layout');
            
            const imagePreview = section.querySelector('.image-preview');
            const hasVisibleImage = !imagePreview.classList.contains('hidden');
            
            // Always look for image data by the wrapper's data-index
            const imageData = sectionImages.find(img => img.index === dataIndex);
            
            if (editor) {
                sectionData.content = {
                    layout: layout,
                    text: { html: editor.quill.root.innerHTML },
                    image: hasVisibleImage && imageData ? { data: imageData.data } : null
                };
            }
        }
        
        sections.push(sectionData);
    });
    
    // Update the hidden input
    document.getElementById('sections-input').value = JSON.stringify(sections);
}

// Load existing sections from the database
function loadSections(sectionsData) {
    if (!sectionsData || !sectionsData.length) return;
    
    const container = document.getElementById('sections-container');
    
    sectionsData.forEach((sectionData, index) => {
        const type = sectionData.type;
        const section = document.createElement('div');
        section.className = 'section-wrapper';
        
        // Assign a unique ID to the section wrapper
        const uniqueId = Date.now() + '-' + index + '-' + Math.random().toString(36).substr(2, 9);
        section.setAttribute('data-index', uniqueId);
        
        section.innerHTML = sectionTemplates[type];
        container.appendChild(section);
        
        // Initialize events
        initSectionEvents(section);
        
        // Initialize Quill editors
        initQuillEditors(section);
        
        // Initialize image uploads if needed
        if (type === 'text-image') {
            initImageUpload(section);
            
            // Set the layout first before loading content
            if (sectionData.content && sectionData.content.layout) {
                const contentDiv = section.querySelector('.section-content');
                const layout = sectionData.content.layout;
                contentDiv.setAttribute('data-layout', layout);
                
                const layoutToggleBtn = section.querySelector('.layout-toggle-btn');
                if (layoutToggleBtn) {
                    layoutToggleBtn.setAttribute('data-layout', layout);
                }
                
                const textCol = contentDiv.querySelector('.text-col');
                const imageCol = contentDiv.querySelector('.image-col');
                
                if (layout === 'image-text') {
                    contentDiv.insertBefore(imageCol, textCol);
                }
            }
        }
        
        // Set content based on section type
        if (type === 'one-column') {
            const editorDiv = section.querySelector('.quill-editor');
            const editorId = editorDiv.id;
            const editor = sectionEditors.find(e => e.id === editorId);
            
            if (editor && sectionData.content && sectionData.content.html) {
                editor.quill.root.innerHTML = sectionData.content.html;
            }
        } else if (type === 'two-column') {
            const editorDivs = section.querySelectorAll('.quill-editor');
            const leftEditorId = editorDivs[0].id;
            const rightEditorId = editorDivs[1].id;
            
            const leftEditor = sectionEditors.find(e => e.id === leftEditorId);
            const rightEditor = sectionEditors.find(e => e.id === rightEditorId);
            
            if (leftEditor && rightEditor && sectionData.content) {
                if (sectionData.content.left && sectionData.content.left.html) {
                    leftEditor.quill.root.innerHTML = sectionData.content.left.html;
                }
                if (sectionData.content.right && sectionData.content.right.html) {
                    rightEditor.quill.root.innerHTML = sectionData.content.right.html;
                }
            }
        } else if (type === 'three-column') {
            const editorDivs = section.querySelectorAll('.quill-editor');
            const leftEditorId = editorDivs[0].id;
            const middleEditorId = editorDivs[1].id;
            const rightEditorId = editorDivs[2].id;
            
            const leftEditor = sectionEditors.find(e => e.id === leftEditorId);
            const middleEditor = sectionEditors.find(e => e.id === middleEditorId);
            const rightEditor = sectionEditors.find(e => e.id === rightEditorId);
            
            if (leftEditor && middleEditor && rightEditor && sectionData.content) {
                if (sectionData.content.left && sectionData.content.left.html) {
                    leftEditor.quill.root.innerHTML = sectionData.content.left.html;
                }
                if (sectionData.content.middle && sectionData.content.middle.html) {
                    middleEditor.quill.root.innerHTML = sectionData.content.middle.html;
                }
                if (sectionData.content.right && sectionData.content.right.html) {
                    rightEditor.quill.root.innerHTML = sectionData.content.right.html;
                }
            }
        } else if (type === 'text-image') {
            const editorDiv = section.querySelector('.quill-editor');
            const editorId = editorDiv.id;
            const editor = sectionEditors.find(e => e.id === editorId);
            
            if (editor && sectionData.content && sectionData.content.text && sectionData.content.text.html) {
                editor.quill.root.innerHTML = sectionData.content.text.html;
            }
            
            if (sectionData.content && sectionData.content.image && sectionData.content.image.data) {
                const imagePreview = section.querySelector('.image-preview');
                const previewImg = imagePreview.querySelector('img');
                const placeholder = section.querySelector('.image-placeholder');
                const removeBtn = section.querySelector('.remove-image-btn');
                
                previewImg.src = sectionData.content.image.data;
                imagePreview.classList.remove('hidden');
                placeholder.classList.add('hidden');
                removeBtn.classList.remove('hidden');
                
                // Store image data with unique ID
                sectionImages.push({
                    index: uniqueId,
                    data: sectionData.content.image.data
                });
            }
        }
    });
    
    // Update the hidden input with the loaded sections
    updateSectionsData();
}

// Document ready - initialize sortable, load existing sections
document.addEventListener('DOMContentLoaded', function() {
    // Load existing sections if available
    const existingSections = @json($blog->sections ?? []);
    if (existingSections && existingSections.length) {
        loadSections(existingSections);
    }
});
</script> 