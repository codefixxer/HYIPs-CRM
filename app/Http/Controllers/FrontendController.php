<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontendController extends Controller
{
    // Home page

    public function index()
    {
        // Fetch all packages from the database
        $packages = Package::all();
        
        // Get the top 2 packages with the highest investment amounts
        $toppackages = Package::orderBy('investment_amount', 'desc')->take(2)->get();
        

        return view('frontend.index', compact('toppackages','packages'));
    }
    
    

    // About page
    public function about()
    {
        return view('frontend.about');
    }

    // Blog page
    public function blog()
    {
        return view('frontend.blog');
    }

    // Careers page
    public function careers()
    {
        return view('frontend.careers');
    }

    // Contact page
    public function contact()
    {
        return view('frontend.contact');
    }

    // Market page
    public function market()
    {
        return view('frontend.markets');
    }

    // Help Center page
    public function helpCenter()
    {
        return view('frontend.help-center');
    }

    // Customers page
    public function customers()
    {
        return view('frontend.customers');
    }

    // Roadmap page
    public function roadmap()
    {
        return view('frontend.roadmap');
    }

    // Legal Docs page
    public function legalDocs()
    {
        return view('frontend.legal-docs');
    }

    // Education page
    public function education()
    {
        return view('frontend.education');
    }
}
