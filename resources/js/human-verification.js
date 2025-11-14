/**
 * Universal "I am human" Verification System
 * 
 * Automatically adds a verification button to all forms on the website.
 * Forms remain disabled until the user clicks "I am human".
 */

class HumanVerification {
    constructor() {
        this.verifiedForms = new Set();
        this.init();
    }

    init() {
        // Wait for DOM to be ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.attachToAllForms());
        } else {
            this.attachToAllForms();
        }

        // Watch for dynamically added forms
        this.observeNewForms();
    }

    attachToAllForms() {
        const forms = document.querySelectorAll('form');
        forms.forEach(form => this.processForm(form));
    }

    processForm(form) {
        // Skip if already processed
        if (form.dataset.humanVerified !== undefined) {
            return;
        }

        // Mark as processed
        form.dataset.humanVerified = 'pending';

        // Skip forms that should be excluded (like admin login, search forms, etc.)
        if (this.shouldSkipForm(form)) {
            form.dataset.humanVerified = 'skipped';
            return;
        }

        // Disable all form inputs initially
        this.disableFormInputs(form);

        // Create and insert the verification button
        this.insertVerificationButton(form);
    }

    shouldSkipForm(form) {
        // Skip if form has the data attribute to opt-out
        if (form.hasAttribute('data-no-human-verification')) {
            return true;
        }

        // Skip GET forms (search forms, filters, etc.)
        if (form.method && form.method.toLowerCase() === 'get') {
            return true;
        }

        // Skip admin forms (optional - you can remove this if you want it on admin forms too)
        const isAdminForm = form.closest('[class*="admin"]') || 
                           form.action.includes('/admin/') ||
                           form.id?.includes('admin');
        
        return isAdminForm;
    }

    disableFormInputs(form) {
        const inputs = form.querySelectorAll('input:not([type="hidden"]), textarea, select, button[type="submit"]');
        inputs.forEach(input => {
            input.dataset.originalDisabled = input.disabled;
            input.disabled = true;
            input.style.opacity = '0.6';
            input.style.pointerEvents = 'none';
        });
    }

    enableFormInputs(form) {
        const inputs = form.querySelectorAll('input:not([type="hidden"]), textarea, select, button[type="submit"]');
        inputs.forEach(input => {
            input.disabled = input.dataset.originalDisabled === 'true';
            input.style.opacity = '';
            input.style.pointerEvents = '';
            delete input.dataset.originalDisabled;
        });
    }

    insertVerificationButton(form) {
        // Create verification container
        const verificationContainer = document.createElement('div');
        verificationContainer.className = 'human-verification-container';
        verificationContainer.setAttribute('data-verification-ui', 'true');

        // Create the button
        const button = document.createElement('button');
        button.type = 'button';
        button.className = 'human-verification-button';
        button.innerHTML = `
            <svg class="human-verification-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
            <span>I am human</span>
        `;

        // Add click handler
        button.addEventListener('click', () => this.handleVerification(form, verificationContainer));

        verificationContainer.appendChild(button);

        // Insert at the beginning of the form
        if (form.firstChild) {
            form.insertBefore(verificationContainer, form.firstChild);
        } else {
            form.appendChild(verificationContainer);
        }
    }

    handleVerification(form, container) {
        // Add success animation
        const button = container.querySelector('.human-verification-button');
        button.classList.add('verifying');

        setTimeout(() => {
            button.classList.remove('verifying');
            button.classList.add('verified');
            
            // Update button text
            button.innerHTML = `
                <svg class="human-verification-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                <span>Verified! You can now fill the form</span>
            `;

            // Wait a moment, then fade out and remove
            setTimeout(() => {
                container.style.transition = 'all 0.5s ease-out';
                container.style.opacity = '0';
                container.style.transform = 'translateY(-10px)';
                
                setTimeout(() => {
                    container.remove();
                    
                    // Enable the form
                    this.enableFormInputs(form);
                    form.dataset.humanVerified = 'true';
                    this.verifiedForms.add(form);

                    // Focus on first input
                    const firstInput = form.querySelector('input:not([type="hidden"]), textarea, select');
                    if (firstInput) {
                        firstInput.focus();
                    }
                }, 500);
            }, 1500);
        }, 600);
    }

    observeNewForms() {
        // Use MutationObserver to detect dynamically added forms
        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                mutation.addedNodes.forEach((node) => {
                    if (node.tagName === 'FORM') {
                        this.processForm(node);
                    } else if (node.querySelectorAll) {
                        const forms = node.querySelectorAll('form');
                        forms.forEach(form => this.processForm(form));
                    }
                });
            });
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true
        });
    }
}

// Initialize the human verification system
if (typeof window !== 'undefined') {
    window.HumanVerification = HumanVerification;
    
    // Auto-initialize
    new HumanVerification();
}

export default HumanVerification;
