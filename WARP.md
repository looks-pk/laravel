# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Project Overview

This is a Laravel 12 application for an accessibility and mobility services company, specializing in stair lifts, grab bars, and bathroom modifications across British Columbia. The application features a content management system for blog posts, service pages, area-specific landing pages, and universal form handling.

## Development Commands

### Setup & Installation
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies  
npm install

# Copy environment file and generate key
cp .env.example .env
php artisan key:generate

# Run database migrations
php artisan migrate

# Create SQLite database if needed
touch database/database.sqlite
```

### Development Workflow
```bash
# Start full development environment (recommended)
composer run dev

# Or start services individually:
php artisan serve                    # Start Laravel dev server
npm run dev                         # Start Vite dev server with HMR
php artisan queue:listen --tries=1  # Process background jobs
php artisan pail --timeout=0       # View logs in real-time
```

### Testing
```bash
# Run all tests
composer run test
# Or: php artisan test

# Run specific test file
php artisan test tests/Feature/SpecificTest.php

# Run tests with coverage
php artisan test --coverage
```

### Code Quality & Building
```bash
# Format code with Laravel Pint
./vendor/bin/pint

# Build assets for production
npm run build

# Clear application caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Generate IDE helper files (if installed)
php artisan ide-helper:generate
```

### Database Operations
```bash
# Create new migration
php artisan make:migration create_table_name

# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Seed database
php artisan db:seed

# Create model with migration and controller
php artisan make:model ModelName -mcr
```

### Artisan Commands
```bash
# Create admin user
php artisan admin:create

# Generate application key
php artisan key:generate

# List all routes
php artisan route:list

# Clear and cache config
php artisan config:cache

# Test reCAPTCHA setup
# Visit: /test-recaptcha
```

## Architecture & Code Structure

### MVC Pattern
- **Models**: Located in `app/Models/` - Eloquent models for User, BlogPost, Service, Category, Tag, Testimonial
- **Controllers**: Located in `app/Http/Controllers/` - Handle HTTP requests and business logic
- **Views**: Located in `resources/views/` - Blade templates with component-based structure

### Key Architectural Components

#### Service Layer
- `UniversalMailService`: Handles all form submissions with automatic data cleaning and email formatting
- `RecaptchaService`: Handles server-side reCAPTCHA token verification with configurable scoring
- Located in `app/Services/`

#### Universal Form System
- `UniversalFormController`: Handles multiple form types (contact, quote, assessment, product inquiry)  
- `UniversalMailService`: Processes and emails form data with intelligent field formatting
- Supports system info collection (IP, user agent, timestamps)

#### Admin System  
- Admin middleware (`AdminMiddleware`) for access control
- Admin controllers in `app/Http/Controllers/Admin/`
- Blog management with WYSIWYG editor
- Category and tag management
- User roles via `is_admin` boolean field

#### Area-Based Landing Pages
- Dynamic area-specific pages for services (e.g., grab bars, stair lifts)
- Located in `resources/views/areas/`
- Covers BC areas: Vancouver, Surrey, Richmond, Burnaby, Coquitlam, etc.

### Database Schema
- **Users**: Standard Laravel users with `is_admin` field
- **Services**: Main service offerings with active/inactive status
- **BlogPosts**: Rich content system with sections, categories, tags, and sidebar cards
- **Categories/Tags**: Taxonomy system for blog organization  
- **Testimonials**: Customer reviews and feedback

### Frontend Architecture
- **Vite**: Modern build tool for assets
- **Tailwind CSS**: Utility-first CSS framework with custom color scheme:
  - Primary: `#0078bf` (blue)
  - Secondary: `#f8b301` (yellow/gold)  
  - Accent: `#d40000` (red)
- **Inter Font**: Primary typography
- **Blade Components**: Reusable UI components

### Routing Structure
- **Public Routes**: Home, About, Contact, Services, Blog, Areas
- **Custom Service Routes**: Special handling for company-profile, gallery, accessible-bathroom-canada
- **Admin Routes**: Protected by auth and admin middleware
- **Universal Forms**: Multiple form endpoints with unified processing
- **API Routes**: Minimal Sanctum-based API setup

### Mail System
- **Universal Form Handling**: Single service handles all form types
- **Automatic Field Formatting**: Converts field names to human-readable format
- **System Information**: Captures submission metadata
- **Error Logging**: Comprehensive error tracking for mail failures

### Security & Spam Protection
- **reCAPTCHA v3 Integration**: Automatic server-side verification for all form submissions
- **RecaptchaService**: Dedicated service for token verification with configurable scoring
- **Frontend Integration**: Universal JavaScript automatically adds reCAPTCHA tokens to all POST forms
- **Logging**: Comprehensive logging of verification attempts and failures

## Development Patterns

### Form Processing
All forms route through `UniversalFormController` with specific methods:
- `contact()` - General contact forms
- `quote()` - Quote requests  
- `assessment()` - Assessment requests
- `productInquiry()` - Product-specific inquiries

### Content Management
- Blog posts support rich content with sections and sidebar cards
- Categories and tags provide content organization
- Published/draft status with publication dates
- SEO-friendly slugs and metadata

### Area Targeting
- Service pages can be area-specific (e.g., stair-lifts-vancouver-british-columbia)
- Views dynamically handle area-based content
- URL structure supports geographic targeting

## Environment & Configuration

### Required Environment Variables
- `DB_CONNECTION=sqlite` (or mysql/pgsql)
- `MAIL_*` - Mail configuration for form submissions
- `RECAPTCHA_SITE_KEY` - Google reCAPTCHA v3 site key
- `RECAPTCHA_SECRET_KEY` - Google reCAPTCHA v3 secret key
- `APP_URL` - Application base URL
- Standard Laravel environment variables

### Key Configuration Files
- `config/database.php` - Database connections (defaults to SQLite)
- `config/mail.php` - Email configuration for form processing
- `tailwind.config.js` - UI styling and color scheme
- `vite.config.js` - Asset building and HMR setup

## Testing Approach
- Feature tests for form submissions and email processing
- Controller tests for admin functionality  
- Model tests for business logic
- Database factories for test data generation

Use PHPUnit for testing with Laravel's testing utilities. The application includes test routes for debugging database connections and mail functionality.