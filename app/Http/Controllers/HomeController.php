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
    public function your_story(Request $request): View
    {
        return view('tatham.your_story');
    }


}
