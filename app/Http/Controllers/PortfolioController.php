<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Contact;

use Illuminate\Support\Str;
use App\Mail\ContactNotification;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('portfolio.index', compact('projects'));
    }

    public function contactStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);


        // Send admin notification using Mailable
        \Mail::to('ahmadshoukat7766@gmail.com')->send(new ContactNotification($contact));

        // Send confirmation email to the user
        \Mail::to($contact->email)->send(new \App\Mail\ContactUserConfirmation($contact));

        return redirect()->back()->with('contact_success', 'Your message has been sent successfully!');
    }

    public function loginPage()
    {
        // This method can be used to return a login view if needed
        return view('login');
    }

    /**
     * Store the project form submission.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function projectFormStore(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'project_name' => 'required|string|max:255',
            'project_description' => 'required|string',
            'project_file' => 'required|file|mimes:pdf,doc,docx|max:10240', // 10MB max
        ]);

        // Handle file upload to public folder
        if ($request->hasFile('project_file')) {
            $file = $request->file('project_file');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Create project_files directory in public if it doesn't exist
            $uploadPath = public_path('project_files');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Move file to public/project_files directory
            $file->move($uploadPath, $fileName);
            $filePath = 'project_files/' . $fileName;
        }

        // Create project submission record
        $projectSubmission = \App\Models\ProjectSubmission::create([
            'email' => $validated['email'],
            'project_name' => $validated['project_name'],
            'project_description' => $validated['project_description'],
            'file_path' => $filePath ?? null,
            'status' => 'pending',
        ]);

        // Send notification email to admin
        \Mail::to('ahmadshoukat7766@gmail.com')->send(new \App\Mail\ProjectSubmissionNotification($projectSubmission));

        return redirect()->back()->with('project_success', 'Your project has been submitted successfully! We will review it and get back to you soon.');
    }
}
