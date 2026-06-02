@extends('layouts.app')

@section('title', 'Service Areas - Home2stay Accessibility Solutions')
@section('meta_description', 'Home2stay provides accessibility solutions across multiple cities. Find your local Home2stay team for stairlifts, grab bars, ramps, and home safety equipment.')

@php
    // Get areas data directly in the view
    $path = resource_path('views/areas');
    $areas = [];
    
    if (\Illuminate\Support\Facades\File::exists($path)) {
        $files = \Illuminate\Support\Facades\File::files($path);
        foreach ($files as $file) {
            $fileName = $file->getFilenameWithoutExtension();
            $fileName = str_replace('.blade', '', $fileName);
            if ($fileName !== 'index') {
                $areas[] = $fileName;
            }
        }
    }
@endphp

@push('styles')
<style>
    :root {
        --primary: #0078bf;
        --primary-dark: #005f96;
        --secondary: #f8b301;
        --secondary-dark: #d99a00;
        --accent: #d40000;
        --text-dark: #2d3748;
        --text-light: #718096;
        --bg-light: #f7fafc;
        --transition: all 0.3s ease;
    }

    .sticky-form {
        position: sticky;
        top: 2rem;
        height: fit-content;
    }

    .area-card {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .area-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .area-map {
        height: 200px;
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        position: relative;
        overflow: hidden;
    }

    .map-placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 3rem;
        background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 100%);
    }

    .actual-map {
        width: 100%;
        height: 100%;
        border: none;
        filter: grayscale(20%) contrast(1.1);
        transition: var(--transition);
    }

    .area-card:hover .actual-map {
        filter: grayscale(0%) contrast(1.2);
    }

    .area-card .card-body {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .area-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
        color: var(--text-dark);
    }

    .area-card p {
        color: var(--text-light);
        margin-bottom: 1.5rem;
        flex-grow: 1;
        line-height: 1.6;
    }

    .btn-primary {
        background: linear-gradient(45deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        transform: translateY(0);
        box-shadow: 0 4px 6px rgba(0, 60, 95, 0.1);
        transition: var(--transition);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, var(--primary-dark) 0%, var(--primary) 100%);
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 60, 95, 0.2);
        color: white;
        text-decoration: none;
    }

    .btn-secondary {
        background: linear-gradient(45deg, var(--secondary) 0%, var(--secondary-dark) 100%);
        color: var(--text-dark);
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        transform: translateY(0);
        box-shadow: 0 4px 6px rgba(216, 154, 0, 0.1);
        transition: var(--transition);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-secondary:hover {
        background: linear-gradient(45deg, var(--secondary-dark) 0%, var(--secondary) 100%);
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(216, 154, 0, 0.2);
        color: var(--text-dark);
        text-decoration: none;
    }

    .quote-form {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        padding: 2rem;
        border-top: 4px solid var(--secondary);
    }

    .form-input {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #e2e8f0;
        border-radius: 0.5rem;
        font-size: 0.875rem;
        transition: var(--transition);
        background: white;
    }

    .form-input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(0, 120, 191, 0.1);
    }

    .form-label {
        display: block;
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    .section-title {
        position: relative;
        display: inline-block;
        margin-bottom: 2rem;
        font-weight: 700;
        letter-spacing: -0.5px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        width: 70px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary) 0%, var(--primary-dark) 100%);
        bottom: -10px;
        left: 0;
        border-radius: 2px;
    }

    @media (max-width: 1024px) {
        .sticky-form {
            position: static;
            margin-top: 2rem;
        }
    }
    .area-tab{
    background:#eee;
    padding:.6rem 1.4rem;
    border-radius:40px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
    }

    .area-tab.active{
    background:#0078bf;
    color:#fff;
    }

    .area-tab-content{display:none;}
    .area-tab-content.active{display:grid;}
</style>
@endpush

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Content -->
            <div class="lg:col-span-2">
                <!-- Header Section -->
                <div class="mb-12">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 section-title mb-8">
                        Our Service Areas
                    </h1>
                    <div class="prose prose-lg max-w-none">
                        <p class="text-xl text-dark-700 leading-relaxed mb-6">
                            Home2stay is proud to serve communities across Canada, bringing accessibility solutions directly to your doorstep. Our experienced local teams understand the unique needs of each region and are committed to helping you create a safer, more accessible home environment.
                        </p>
                        <p class="text-xl text-dark-600 leading-relaxed mb-6">
                            Whether you need stairlifts, grab bars, wheelchair ramps, bathroom modifications, or comprehensive home assessments, our certified professionals are ready to provide personalized solutions that enhance your independence and quality of life.
                        </p>
                        <p class="text-xl text-dark-600 leading-relaxed mb-8">
                            Each of our service areas is staffed with knowledgeable specialists who are familiar with local building codes, accessibility requirements, and community resources. We're not just a service provider – we're your neighbors, committed to helping you stay safely in the home you love.
                        </p>
                    </div>
                    
                    <a href="#quote-form" class="btn-secondary inline-flex items-center text-lg px-8 py-4">
                        Get Your Free Quote
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <!-- Service Tabs -->
                 @php
                                    $mapEmbeds = [
                                        'stair-lifts-surrey-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83280.02!2d-122.8447552!3d49.1913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d07f8644!2sSurrey%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1640995400000!5m2!1sen!2sus',
                                        'stair-lifts-vancouver' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83326.84!2d-123.27325085!3d49.2608724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f143a94fb3!2sVancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1640995300000!5m2!1sen!2sus',
                                        'stair-lifts-vancouver-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83326.84!2d-123.27325085!3d49.2608724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f143a94fb3!2sVancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1640995300000!5m2!1sen!2sus',
                                        'stair-lifts-richmond-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83290.45!2d-123.1367776!3d49.1666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d8c8b!2sRichmond%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1641000500000!5m2!1sen!2sus',
                                        'stair-lifts-burnaby' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83265.23!2d-122.9784776!3d49.2488091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548679fa87d86c1b!2sBurnaby%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1640995500000!5m2!1sen!2sus',
                                        'stair-lifts-coquitlam-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83190.45!2d-122.7625098!3d49.2838228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548679a4b8!2sCoquitlam%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1640995600000!5m2!1sen!2sus',
                                        'stair-lifts-port-coquitlam-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83180.12!2d-122.7320587!3d49.2962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548679ab8b2!2sPort%20Coquitlam%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1640995700000!5m2!1sen!2sus',
                                        'stair-lifts-new-westminster-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83240.67!2d-122.9105276!3d49.2065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548679a8c2!2sNew%20Westminster%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1640995800000!5m2!1sen!2sus',
                                        'stair-lifts-delta-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83420.89!2d-123.0583776!3d49.0847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d89bc7!2sDelta%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1640995900000!5m2!1sen!2sus',
                                        'stair-lifts-langley-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83350.23!2d-122.6058776!3d49.1016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d7c8abc!2sLangley%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1641000000000!5m2!1sen!2sus',
                                        'stair-lifts-white-rock' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83380.45!2d-122.8024776!3d49.0254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d89a2c!2sWhite%20Rock%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1641000100000!5m2!1sen!2sus',
                                        'stair-lifts-north-vancouver' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83290.67!2d-123.0645776!3d49.3284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54866fb2e8!2sNorth%20Vancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1641000200000!5m2!1sen!2sus',
                                        'stair-lifts-west-vancouver' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83310.23!2d-123.1645776!3d49.3654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54866f8bc4!2sWest%20Vancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2sus!4v1641000300000!5m2!1sen!2sus',
                                        'stair-lifts-richmond-hill-ontario' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92380.45!2d-79.4372776!3d43.8828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2a4d7c!2sRichmond%20Hill%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sus!4v1641000400000!5m2!1sen!2sus',
                                        'grab-bars-langley-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20898.956785888484!2d-122.67949243492926!3d49.098618667380705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485cfccc76506e7%3A0x52d0b66a8f1a6ca9!2sLangley%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756726818449!5m2!1sen!2s',
                                        'grab-bars-north-vancouver' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20807.648905212005!2d-123.09098453418149!3d49.31511476942821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867046f9232b41%3A0x6f85cb4bd4fbec5a!2sNorth%20Vancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756727888983!5m2!1sen!2s',
                                        'grab-bars-coquitlam-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83281.47567501604!2d-122.83899175047674!3d49.284997154754805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548678c85ac25e9f%3A0x595768762eee76cf!2sCoquitlam%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756727981130!5m2!1sen!2s',
                                        'grab-bars-delta-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167191.7671947383!2d-123.27458159163787!3d49.09858514889418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485fce1db8802b7%3A0xe7af052ac3c8ad9b!2sDelta%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756728029246!5m2!1sen!2s',
                                        'grab-bars-port-coquitlam-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41669.06444298126!2d-122.79587290586763!3d49.251446175140586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d5feded69fd5%3A0xa19d45c0bb19b8b3!2sPort%20Coquitlam%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756728079438!5m2!1sen!2s',
                                        'grab-bars-white-rock' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20933.442925650645!2d-122.83286753521169!3d49.01666566663295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485c376dc9d8043%3A0x50135152a7b09c0!2sWhite%20Rock%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756728124918!5m2!1sen!2s',
                                        'grab-bars-west-vancouver' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83277.7453665398!2d-123.25485265!3d49.3684454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54866e8d7f0c9b59%3A0x4d7a0b0f1a9a5d84!2sWest%20Vancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756729098036!5m2!1sen!2s',
                                        'grab-bars-burnaby' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83282.32665398!2d-122.984055!3d49.2488091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548679fa87d86c1b%3A0xbbdf4bb3e2d14c55!2sBurnaby%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756729198036!5m2!1sen!2s',
                                        'grab-bars-surrey-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d166394.77786803696!2d-122.8447552!3d49.1913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d07368e1aa45%3A0x4d07368e1aa45d07!2sSurrey%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756729298036!5m2!1sen!2s',
                                        'grab-bars-new-westminster-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d166597.6426797817!2d-122.95495865321086!3d49.20472265493063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548698b7b8defe5b%3A0xdabcfe2b6646a5f!2sNew%20Westminster%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756729398036!5m2!1sen!2s',
                                        'grab-bars-vancouver-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d166394.77786803696!2d-123.27651005!3d49.257352999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f143a94fb3%3A0xbb9196ea9b81f38b!2sVancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756729498036!5m2!1sen!2s',
                                        'grab-bars-richmond-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83208.3578288465!2d-123.18151355!3d49.170334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d6be7a50bc2d%3A0x16523c00e79e3217!2sRichmond%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1756729598036!5m2!1sen!2s',
                                        'ramps-north-vancouver' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83290.67!2d-123.0645776!3d49.3284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54866fb2e8!2sNorth%20Vancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1641000200000!5m2!1sen!2s',
                                        'ramps-west-vancouver' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83310.23!2d-123.1645776!3d49.3654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54866f8bc4!2sWest%20Vancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1641000300000!5m2!1sen!2s',
                                        'ramps-white-rock' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83380.45!2d-122.8024776!3d49.0254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d89a2c!2sWhite%20Rock%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1641000100000!5m2!1sen!2s',
                                        'ramps-coquitlam-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83190.45!2d-122.7625098!3d49.2838228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548679a4b8!2sCoquitlam%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1640995600000!5m2!1sen!2s',
                                        'ramps-langley-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83350.23!2d-122.6058776!3d49.1016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d7c8abc!2sLangley%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1641000000000!5m2!1sen!2s',
                                        'ramps-new-westminster-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83240.67!2d-122.9105276!3d49.2065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548679a8c2!2sNew%20Westminster%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1640995800000!5m2!1sen!2s',
                                        'ramps-vancouver-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83326.84!2d-123.27325085!3d49.2608724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f143a94fb3!2sVancouver%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1640995300000!5m2!1sen!2s',
                                        'ramps-richmond-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83290.45!2d-123.1367776!3d49.1666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d8c8b!2sRichmond%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1641000500000!5m2!1sen!2s',
                                        'ramps-delta-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83420.89!2d-123.0583776!3d49.0847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d89bc7!2sDelta%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1640995900000!5m2!1sen!2s',
                                        'ramps-surrey-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83280.02!2d-122.8447552!3d49.1913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d07f8644!2sSurrey%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1640995400000!5m2!1sen!2s',
                                        'ramps-burnaby' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83265.23!2d-122.9784776!3d49.2488091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548679fa87d86c1b!2sBurnaby%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1640995500000!5m2!1sen!2s',
                                        'ramps-port-coquitlam-british-columbia' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83180.12!2d-122.7320587!3d49.2962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548679ab8b2!2sPort%20Coquitlam%2C%20BC%2C%20Canada!5e0!3m2!1sen!2s!4v1640995700000!5m2!1sen!2s',
                                         'tub-cuts-commercial-in-white-rock' =>
        'https://www.google.com/maps?q=White+Rock,+BC,+Canada&output=embed',

    'tub-cuts-delta' =>
        'https://www.google.com/maps?q=Delta,+BC,+Canada&output=embed',

    'tub-cuts-in-delta-bc' =>
        'https://www.google.com/maps?q=Delta,+British+Columbia,+Canada&output=embed',

    'tub-cuts-langley' =>
        'https://www.google.com/maps?q=Langley,+BC,+Canada&output=embed',

    'tub-cuts-new-westminster' =>
        'https://www.google.com/maps?q=New+Westminster,+BC,+Canada&output=embed',

    'tub-cuts-north-vancouver' =>
        'https://www.google.com/maps?q=North+Vancouver,+BC,+Canada&output=embed',

    'tub-cuts-port-coquitlam' =>
        'https://www.google.com/maps?q=Port+Coquitlam,+BC,+Canada&output=embed',

    'tub-cuts-professional-in-coquitlam' =>
        'https://www.google.com/maps?q=Coquitlam,+BC,+Canada&output=embed',

    'tub-cuts-professional-installation-in-burnaby' =>
        'https://www.google.com/maps?q=Burnaby,+BC,+Canada&output=embed',

    'tub-cuts-trusted-in-west-vancouver' =>
        'https://www.google.com/maps?q=West+Vancouver,+BC,+Canada&output=embed',

    'tub-cuts-vancouver' =>
        'https://www.google.com/maps?q=Vancouver,+BC,+Canada&output=embed',

    'tub-cuts-surrey' =>
        'https://www.google.com/maps?q=Surrey,+BC,+Canada&output=embed',
                                    ];
                                @endphp
                <div class="mb-10">

                    <div class="flex gap-4 flex-wrap mb-8">
                        <button class="area-tab active" data-tab="stair-lifts">Stair Lifts</button>
                        <button class="area-tab" data-tab="grab-bars">Grab Bars</button>
                        <button class="area-tab" data-tab="ramps">Ramps</button>
                        <button class="area-tab" data-tab="tub-cuts">Tub Cuts</button>

                    </div>

                @php
                $services = [
                    'stair-lifts' => [],
                    'grab-bars' => [],
                    'ramps' => [],
                    'tub-cuts' => []
                ];

                foreach($areas as $area){
                    if(str_starts_with($area,'stair-lifts')){
                        $services['stair-lifts'][] = $area;
                    }
                    if(str_starts_with($area,'grab-bars')){
                        $services['grab-bars'][] = $area;
                    }
                    if(str_starts_with($area,'ramps')){
                        $services['ramps'][] = $area;
                    }
                    if(str_starts_with($area,'tub-cuts')){
                        $services['tub-cuts'][] = $area;
                    }
                }
                @endphp


                @foreach($services as $service => $items)

                <div class="area-tab-content grid grid-cols-1 md:grid-cols-2 gap-8 {{ $loop->first ? 'active' : '' }}"
                    id="tab-{{ $service }}">

                @foreach($items as $area)

                <div class="area-card">

                    {{-- MAP SECTION --}}
                    <div class="area-map">

                        @php $mapUrl = $mapEmbeds[$area] ?? null; @endphp

                        @if($mapUrl)
                            <iframe class="actual-map"
                                src="{{ $mapUrl }}"
                                loading="lazy"></iframe>
                        @else
                            <div class="map-placeholder">📍</div>
                        @endif

                        <div class="absolute inset-0 bg-black/30 flex items-end p-4">
                            <h3 class="text-white text-xl font-bold">
                                {{ ucwords(str_replace('-', ' ', $area)) }}
                            </h3>
                        </div>

                    </div>


                    {{-- CARD BODY --}}
                    <div class="card-body">

                        <h3>{{ ucwords(str_replace('-', ' ', $area)) }}</h3>

                        <p>
                            Professional accessibility solutions and home safety equipment for
                            {{ ucwords(str_replace('-', ' ', $area)) }} residents.
                        </p>

                        <a href="{{ route('areas.show',$area) }}" class="btn-primary">
                            Learn More →
                        </a>

                    </div>

                </div>

                @endforeach
                </div>

                @endforeach

                </div>

                <!-- Contact Section for Unlisted Areas -->
                <div class="mt-16 bg-white rounded-xl shadow-lg p-8">
                    <div class="text-center">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Don't See Your Area?</h2>
                        <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                            We're constantly expanding our service areas. If you don't see your city listed, contact us to learn about our services in your region or to request service expansion.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('contact') }}" class="btn-primary">
                                Contact Us
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </a>
                            <a href="tel:604-259-1211" class="btn-secondary">
                                Call (604) 259-1211
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar - Sticky Quote Form -->
            <div class="lg:col-span-1">
                <div class="sticky-form">
                    <div class="quote-form" id="quote-form">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Get Your Free Quote</h3>
                            <p class="text-gray-600 text-sm">Quick and easy - no obligation</p>
                        </div>

                        <form action="/submit-assessment" class="space-y-6">
                            @csrf
                            <input type="hidden" name="form_type" value="assessment">
                            <input type="hidden" name="form_source" value="areas_page_assessment_form">
                            <div>
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" id="name" name="name" class="form-input" required placeholder="Enter your full name">
                            </div>

                            <div>
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" id="email" name="email" class="form-input" required placeholder="your@email.com">
                            </div>

                            <div>
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" class="form-input" required placeholder="(555) 123-4567">
                            </div>

                            <div>
                                <label for="city" class="form-label">City/Area *</label>
                                <input type="text" id="city" name="city" class="form-input" required placeholder="Enter your city">
                            </div>

                            <button type="submit" class="btn-primary w-full py-3">
                                Get Free Quote
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div class="text-center mt-4">
                                <p class="text-xs text-gray-500">
                                    By submitting this form, you agree to our 
                                    <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
                                </p>
                            </div>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="mt-6 bg-gray-100 rounded-lg p-4">
                        <div class="text-center">
                            <h4 class="font-semibold text-gray-900 mb-2">Prefer to Call?</h4>
                            <div class="space-y-1">
                                <a href="tel:604-259-1211" class="text-xl font-bold text-blue-600 hover:text-blue-700 block">
                                    (604) 259-1211
                                </a>
                            </div>
                            <p class="text-sm text-gray-600 mt-2">Mon-Fri 8:30AM-4:30PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle quote form submission
    const quoteForm = document.getElementById('quote-form-submit');
    if (quoteForm) {
        quoteForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            if (!data.name || !data.email || !data.phone || !data.city) {
                showFlash('Please fill in all required fields.', 'error');
                return;
            }
            var formEl = this;
            fetch('/submit-assessment', {
                method: 'POST',
                body: formData,
            }).then(function(response) {
                return response.json().catch(function() { return {}; });
            }).then(function(result) {
                showFlash(result.message || 'Thank you! Our team will contact you within 24 hours.');
                formEl.reset();
            }).catch(function() {
                showFlash('Sorry, there was an error. Please try again.', 'error');
            });
        });
    }

    // Smooth scroll for "Get Your Free Quote" button
    const quoteButton = document.querySelector('a[href="#quote-form"]');
    if (quoteButton) {
        quoteButton.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.getElementById('quote-form');
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }
});



</script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('.area-tab').forEach(tab => {

        tab.addEventListener('click', () => {

            document.querySelectorAll('.area-tab')
                .forEach(t => t.classList.remove('active'));

            document.querySelectorAll('.area-tab-content')
                .forEach(c => c.classList.remove('active'));

            tab.classList.add('active');

            document
                .getElementById('tab-' + tab.dataset.tab)
                .classList.add('active');
        });

    });

});
</script>
@endpush 