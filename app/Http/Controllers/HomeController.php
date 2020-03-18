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

    public function test(): View
    {
        return view('tatham.test');
    }

    public function case_studies(Request $request): View
    {
        return view('tatham.landing_case_studies');
    }

    public function bootcamp(Request $request): View
    {
        return view('tatham.landing_bootcamp');
    }

    public function our_approach(Request $request): View
    {
        return view('tatham.landing_our_approach');
    }

    public function consult(Request $request): View
    {
        return view('tatham.landing_consult');
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
