<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    // Get all available custom service templates by checking the directory
    public function getAvailableCustomServices()
    {
        $path = resource_path('views/services/custom');
        $customServices = [];
        
        // Log the directory path
        Log::info("Looking for custom services in: {$path}");
        
        // Check if the directory exists
        if (!File::exists($path)) {
            Log::error("Directory does not exist: {$path}");
            return $customServices;
        }
        
        // Get all files in the directory
        $files = File::files($path);
        Log::info("Found " . count($files) . " files in custom services directory");
        
        foreach ($files as $file) {
            // Get full file path for logging
            $filePath = $file->getPathname();
            
            // Get file name without both .blade.php extensions
            $fileName = $file->getFilename();
            // Remove .blade.php from the end
            $fileName = str_replace('.blade.php', '', $fileName);
            
            Log::info("Processing file: {$filePath} -> {$fileName}");
            
            // Only include .blade.php files
            if (str_ends_with($filePath, '.blade.php')) {
                $customServices[] = $fileName;
            }
        }
        
        Log::info("Final list of custom services: " . implode(", ", $customServices));
        return $customServices;
    }

    // Check if a custom service template exists
    public function isValidCustomService($service)
    {
        // Log the incoming service name
        Log::info("Checking if service is valid (incoming): {$service}");
        
        $availableServices = $this->getAvailableCustomServices();
        
        // Log available services
        Log::info("Available services: " . implode(", ", $availableServices));
        
        // Case-insensitive check for the service in available templates
        foreach ($availableServices as $availableService) {
            if (strtolower($service) === strtolower($availableService)) {
                Log::info("Service found: {$service} matches {$availableService}");
                return true;
            }
        }
        
        Log::info("Service not found: {$service}");
        return false;
    }

    public function index()
    {
        $services = Service::where('is_active', true)->get();
        
        // Get custom services from templates (for navigation)
        $customServices = $this->getAvailableCustomServices();
        
        return view('services.index', compact('services', 'customServices'));
    }

    public function show(Service $service)
    {
        if (!$service->is_active) {
            abort(404);
        }

        $relatedServices = Service::where('is_active', true)
            ->where('id', '!=', $service->id)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $testimonials = $service->testimonials()
            ->where('is_approved', true)
            ->latest()
            ->take(6)
            ->get();

        return view('services.show', compact('service', 'relatedServices', 'testimonials'));
    }
    
    public function customShow($service)
    {
        Log::info("customShow called with service: {$service}");
        
        // Strip .blade extension if it was added to the URL
        if (str_ends_with($service, '.blade')) {
            $service = substr($service, 0, -6);
            Log::info("Removed .blade extension, now checking: {$service}");
        }
        
        // Ensure we're only serving valid custom services
        if (!$this->isValidCustomService($service)) {
            Log::error("Invalid service requested: {$service}");
            abort(404, 'Custom service page not found');
        }
        
        // Get case-sensitive file name by iterating through available services
        $availableServices = $this->getAvailableCustomServices();
        $exactServiceName = $service;
        $found = false;
        
        foreach ($availableServices as $availableService) {
            if (strtolower($service) === strtolower($availableService)) {
                $exactServiceName = $availableService;
                $found = true;
                Log::info("Found exact service name: {$exactServiceName}");
                break;
            }
        }
        
        if (!$found) {
            Log::error("Could not find exact match for service: {$service}");
            abort(404, 'Custom service page not found');
        }
        
        // Check if the view actually exists in the filesystem
        $viewPath = "services.custom.{$exactServiceName}";
        $viewFile = resource_path("views/services/custom/{$exactServiceName}.blade.php");
        
        if (!file_exists($viewFile)) {
            Log::error("View file does not exist: {$viewFile}");
            abort(404, 'Custom service template not found');
        }
        
        Log::info("Rendering view: {$viewPath}");
        
        // Return the view with the correct view path format and proper name
        return view($viewPath, [
            'service' => $exactServiceName,
            'serviceTitle' => ucwords(str_replace('-', ' ', $exactServiceName))
        ]);
    }
    
    // Return a list of all custom service pages for a dynamic sitemap or menu
    public function getCustomServicesList()
    {
        return $this->getAvailableCustomServices();
    }
} 