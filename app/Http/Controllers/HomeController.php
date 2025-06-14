<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestPosts = BlogPost::published()
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        $featuredServices = Service::where('is_active', true)
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('home', compact('latestPosts', 'featuredServices'));
    }
} 