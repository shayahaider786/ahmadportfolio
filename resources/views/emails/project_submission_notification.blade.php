<h2>New Project Submission</h2>
<p><strong>Project Name:</strong> {{ $projectSubmission->project_name }}</p>
<p><strong>Project Description:</strong></p>
<p>{{ $projectSubmission->project_description }}</p>
@if($projectSubmission->file_path)
<p><strong>File:</strong> {{ $projectSubmission->file_path }}</p>
@endif
<p><strong>Status:</strong> {{ ucfirst($projectSubmission->status) }}</p>
<p><strong>Submitted:</strong> {{ $projectSubmission->created_at->format('F j, Y \a\t g:i A') }}</p>
