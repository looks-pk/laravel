/**
 * Universal "I am human" Verification System
 * 
 * Automatically adds a verification button to all forms on the website.
 * Forms remain disabled until the user clicks "I am human".
 */

class HumanVerification {
    constructor() {
        this.verifiedForms = new Set();
        this.formWidgets = new Map();
        this.init();
    }

    init() {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.attachToAllForms());
        } else {
            this.attachToAllForms();
        }

        this.observeNewForms();
    }

    attachToAllForms() {
        const forms = document.querySelectorAll('form');
        forms.forEach(form => this.processForm(form));
    }

    processForm(form) {
        if (form.dataset.humanVerified !== undefined) {
            return;
        }

        form.dataset.humanVerified = 'pending';

        if (this.shouldSkipForm(form)) {
            form.dataset.humanVerified = 'skipped';
            return;
        }

        this.insertVerificationWidget(form);
        this.bindFormSubmitHandler(form);
    }

    shouldSkipForm(form) {
        if (form.hasAttribute('data-no-human-verification')) {
            return true;
        }

        if (form.method && form.method.toLowerCase() === 'get') {
            return true;
        }

        const action = form.getAttribute('action') || '';
        const isAdminForm = form.closest('[class*="admin"]') ||
            (action && action.includes('/admin/')) ||
            (form.id && form.id.includes('admin'));

        return Boolean(isAdminForm);
    }

    insertVerificationWidget(form) {
        const container = document.createElement('div');
        container.className = 'human-verification-container';
        container.setAttribute('data-verification-ui', 'true');

        const leftPanel = document.createElement('div');
        leftPanel.className = 'human-verification-left';

        const button = document.createElement('button');
        button.type = 'button';
        button.className = 'human-verification-button';
        button.setAttribute('aria-pressed', 'false');
        button.setAttribute('aria-live', 'polite');
        button.innerHTML = `
            <span class="human-checkbox" aria-hidden="true">
                <span class="human-checkbox-spinner"></span>
                <svg class="human-checkbox-checkmark" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                    <polyline points="3.5 8.5 6.5 11.5 12.5 4.5"></polyline>
                </svg>
            </span>
            <span class="human-checkbox-text">I'm not a robot</span>
        `;

        const statusMessage = document.createElement('p');
        statusMessage.className = 'human-verification-hint';
        statusMessage.setAttribute('aria-live', 'polite');
        statusMessage.hidden = true;

        leftPanel.appendChild(button);
        leftPanel.appendChild(statusMessage);

        const branding = document.createElement('div');
        branding.className = 'human-verification-branding';
        branding.innerHTML = `
            <span class="human-brand-logo" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M8 13l2.5 3L16 8"></path>
                </svg>
            </span>
            <span class="human-brand-text">
                <span class="human-brand-title">HumanCheck</span>
                <small>Privacy • Terms</small>
            </span>
        `;

        container.append(leftPanel, branding);

        button.addEventListener('click', () => this.handleVerification(form));

        const primarySubmit = form.querySelector('button[type="submit"], input[type="submit"]');
        if (primarySubmit && primarySubmit.parentNode) {
            primarySubmit.parentNode.insertBefore(container, primarySubmit);
        } else {
            form.appendChild(container);
        }

        this.formWidgets.set(form, { container, button, statusMessage });
    }

    bindFormSubmitHandler(form) {
        if (form.dataset.humanSubmitBound === 'true') {
            return;
        }

        const submitHandler = (event) => this.preventSubmitIfNotVerified(event, form);
        form.addEventListener('submit', submitHandler);
        form.dataset.humanSubmitBound = 'true';
    }

    preventSubmitIfNotVerified(event, form) {
        if (form.dataset.humanVerified === 'true') {
            return;
        }

        event.preventDefault();
        event.stopImmediatePropagation();
        this.showVerificationRequired(form);
    }

    showVerificationRequired(form) {
        const widget = this.formWidgets.get(form);
        if (!widget) {
            return;
        }

        const { container, statusMessage, button } = widget;
        container.classList.add('has-error');
        statusMessage.hidden = false;
        statusMessage.textContent = 'Please confirm you are not a robot before submitting.';

        if (button) {
            button.focus();
        }
    }

    handleVerification(form) {
        const widget = this.formWidgets.get(form);
        if (!widget) {
            return;
        }

        const { container, button, statusMessage } = widget;

        if (form.dataset.humanVerified === 'true' || button.disabled) {
            return;
        }

        container.classList.remove('has-error');
        statusMessage.hidden = true;

        button.disabled = true;
        button.classList.add('verifying');

        setTimeout(() => {
            button.classList.remove('verifying');
            button.classList.add('verified');
            button.setAttribute('aria-pressed', 'true');

            form.dataset.humanVerified = 'true';
            this.verifiedForms.add(form);
            container.classList.add('is-verified');
        }, 800);
    }

    observeNewForms() {
        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                mutation.addedNodes.forEach((node) => {
                    if (node.tagName === 'FORM') {
                        this.processForm(node);
                    } else if (node.querySelectorAll) {
                        const forms = node.querySelectorAll('form');
                        forms.forEach(nestedForm => this.processForm(nestedForm));
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
