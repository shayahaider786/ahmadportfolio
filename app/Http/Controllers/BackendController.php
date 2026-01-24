<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Project;
use App\Models\ProjectSubmission;

class BackendController extends Controller
{
    /**
     * Show the backend dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        $projectCount = Project::count();
        $contactCount = Contact::count();
        $projectSubmissionCount = ProjectSubmission::count();
        return view('backend.index', compact('projectCount', 'contactCount', 'projectSubmissionCount'));
    }


    /**
     * Show the admin home page.
     *
     * @return \Illuminate\View\View
     */ 
    public function contactList()
    {
        $contacts = Contact::latest()->get();           
        return view('backend.contacts', compact('contacts'));
    }

    /**
     * Show the contact detail page.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function contactShow($id)
    {
        $contact = Contact::findOrFail($id);
        return view('backend.contacts.show', compact('contact'));
    }


    public function contactDestroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('admin.contacts')->with('success', 'Contact deleted successfully.');
    }

    /**
     * Show the project submissions list.
     *
     * @return \Illuminate\View\View
     */
    public function projectSubmissions()
    {
        $submissions = ProjectSubmission::latest()->get();
        return view('backend.project_submissions.index', compact('submissions'));
    }

    /**
     * Show the project submission detail page.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function projectSubmissionShow($id)
    {
        $submission = ProjectSubmission::findOrFail($id);
        return view('backend.project_submissions.show', compact('submission'));
    }

    /**
     * Update the project submission status.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function projectSubmissionStatus(Request $request, $id)
    {
        $submission = ProjectSubmission::findOrFail($id);
        $submission->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'Project submission status updated successfully.');
    }

    /**
     * Delete the project submission and its associated file.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function projectSubmissionDestroy($id)
    {
        $submission = ProjectSubmission::findOrFail($id);
        
        // Delete the file from public folder if it exists
        if ($submission->file_path && file_exists(public_path($submission->file_path))) {
            unlink(public_path($submission->file_path));
        }
        
        // Delete the submission record
        $submission->delete();
        
        return redirect()->route('admin.project-submissions')->with('success', 'Project submission deleted successfully.');
    }
}
