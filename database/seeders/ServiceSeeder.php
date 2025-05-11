<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'title' => 'Web Development',
                'excerpt' => 'Custom web solutions tailored to your business needs, from simple websites to complex web applications.',
                'content' => '<p>Our web development services cover everything from simple brochure websites to complex web applications. We use the latest technologies and best practices to deliver high-quality, scalable solutions.</p>
                <p>Our team of experienced developers specializes in:</p>
                <ul>
                    <li>Custom Website Development</li>
                    <li>E-commerce Solutions</li>
                    <li>Content Management Systems</li>
                    <li>Web Application Development</li>
                    <li>API Development</li>
                </ul>',
                'meta_description' => 'Professional web development services for businesses of all sizes. Custom websites, e-commerce solutions, and web applications.',
                'features' => [
                    [
                        'title' => 'Responsive Design',
                        'description' => 'Websites that look great on all devices'
                    ],
                    [
                        'title' => 'SEO Friendly',
                        'description' => 'Built with search engine optimization in mind'
                    ],
                    [
                        'title' => 'Fast Loading',
                        'description' => 'Optimized for speed and performance'
                    ],
                    [
                        'title' => 'Secure',
                        'description' => 'Built with security best practices'
                    ]
                ],
                'process' => [
                    [
                        'title' => 'Discovery',
                        'description' => 'Understanding your requirements and goals'
                    ],
                    [
                        'title' => 'Planning',
                        'description' => 'Creating a detailed project plan'
                    ],
                    [
                        'title' => 'Design',
                        'description' => 'Creating wireframes and mockups'
                    ],
                    [
                        'title' => 'Development',
                        'description' => 'Building your website or application'
                    ],
                    [
                        'title' => 'Testing',
                        'description' => 'Quality assurance and testing'
                    ],
                    [
                        'title' => 'Launch',
                        'description' => 'Deployment and go-live'
                    ]
                ],
                'icon' => 'fas fa-laptop-code',
                'is_active' => true
            ],
            [
                'title' => 'Mobile App Development',
                'excerpt' => 'Native and cross-platform mobile applications for iOS and Android platforms.',
                'content' => '<p>We develop high-quality mobile applications for both iOS and Android platforms. Our mobile apps are designed to provide an excellent user experience while meeting your business objectives.</p>
                <p>Our mobile development services include:</p>
                <ul>
                    <li>iOS App Development</li>
                    <li>Android App Development</li>
                    <li>Cross-platform Development</li>
                    <li>App Maintenance & Support</li>
                    <li>App Store Optimization</li>
                </ul>',
                'meta_description' => 'Professional mobile app development services for iOS and Android. Native and cross-platform solutions.',
                'features' => [
                    [
                        'title' => 'Native Performance',
                        'description' => 'Optimized for each platform'
                    ],
                    [
                        'title' => 'User-Friendly',
                        'description' => 'Intuitive and easy to use'
                    ],
                    [
                        'title' => 'Offline Support',
                        'description' => 'Works without internet connection'
                    ],
                    [
                        'title' => 'Regular Updates',
                        'description' => 'Continuous improvement and support'
                    ]
                ],
                'process' => [
                    [
                        'title' => 'Concept',
                        'description' => 'Defining the app concept and goals'
                    ],
                    [
                        'title' => 'Design',
                        'description' => 'Creating UI/UX designs'
                    ],
                    [
                        'title' => 'Development',
                        'description' => 'Building the application'
                    ],
                    [
                        'title' => 'Testing',
                        'description' => 'Quality assurance and testing'
                    ],
                    [
                        'title' => 'Deployment',
                        'description' => 'App store submission and launch'
                    ]
                ],
                'icon' => 'fas fa-mobile-alt',
                'is_active' => true
            ],
            // Add more services as needed
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
} 