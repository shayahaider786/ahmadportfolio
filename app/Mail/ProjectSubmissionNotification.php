<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProjectSubmissionNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $projectSubmission;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($projectSubmission)
    {
        $this->projectSubmission = $projectSubmission;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Project Submission')
                    ->view('emails.project_submission_notification');
    }
}
