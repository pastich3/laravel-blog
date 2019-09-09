<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(Request $request): View
    {
        return view('tatham.landing');
    }

    /**
     * Show the application dashboard.
     */
    public function case_studies(Request $request): View
    {
        return view('tatham.case_studies');
    }

    public function yourStory(Request $request): View
    {
        return view('tatham.your_story');
    }

    public function ourStory(Request $request): View
    {
        return view('tatham.our_story');
    }

    public function contact(Request $request): View
    {
        return view('tatham.contact');
    }

    public function testimonials(Request $request): View
    {
        return view('tatham.testimonials');
    }

    public function contactInfoSubmitted(Request $request): View
    {
        return view('tatham.contact_submitted');
    }
}
