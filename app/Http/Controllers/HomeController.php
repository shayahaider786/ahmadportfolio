<?php

namespace App\Http\Controllers;
use Illuminate\View\View; // correct import
use App\Models\Project;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\ProjectSubmission;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
    {
        return view('home');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $projectCount = Project::count();
        $blogCount = Blog::count();
        $contactCount = Contact::count();
        $projectSubmissionCount = ProjectSubmission::count();
        // Portfolio users: count of unique emails in contacts (as a proxy for users who contacted)
        $portfolioUserCount = Contact::distinct('email')->count('email');
        return view('backend.index', compact('projectCount', 'blogCount', 'contactCount', 'projectSubmissionCount', 'portfolioUserCount'));
    }
}
