@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
           <h3 class="card-title">Project Submissions</h3>
           
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Projects</h4>
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Project Name</th>
                                    <th>Description</th>
                                    <th>File</th>
                                    <th>Status</th>
                                    <th>Submitted</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($submissions as $submission)
                                    <tr>
                                        <td>{{ $submission->id }}</td>
                                        <td>{{ $submission->email }}</td>
                                        <td>{{ $submission->project_name }}</td>
                                        <td>
                                            {{ Str::limit($submission->project_description, 100) }}
                                        </td>
                                        <td>
                                            @if($submission->file_path)
                                                <a href="{{ asset($submission->file_path) }}" 
                                                   target="_blank" 
                                                   class="btn btn-sm btn-info">
                                                    View File
                                                </a>
                                            @else
                                                <span class="text-muted">No file</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge badge-{{ $submission->status === 'pending' ? 'warning' : ($submission->status === 'approved' ? 'success' : 'danger') }}">
                                                {{ ucfirst($submission->status) }}
                                            </span>
                                        </td>
                                        <td>{{ $submission->created_at->format('M j, Y g:i A') }}</td>
                                        <td>
                                            <a href="{{ route('admin.project-submissions.show', $submission->id) }}" 
                                               class="btn btn-sm btn-primary">
                                                View Details
                                            </a>
                                            <form action="{{ route('admin.project-submissions.delete', $submission->id) }}" 
                                                  method="POST" 
                                                  class="d-inline"
                                                  onsubmit="return confirm('Are you sure you want to delete this project submission? This action cannot be undone.')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No project submissions found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
