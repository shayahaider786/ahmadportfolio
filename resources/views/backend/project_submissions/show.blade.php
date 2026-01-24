@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Project Submission Details</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.project-submissions') }}" class="btn btn-secondary">
                                Back to List
                            </a>
                            <form action="{{ route('admin.project-submissions.delete', $submission->id) }}" method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Are you sure you want to delete this project submission? This action cannot be undone.')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Delete Submission
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label><strong>Project Name:</strong></label>
                                    <p class="form-control-static">{{ $submission->project_name }}</p>
                                </div>
                                <div class="form-group">
                                    <label><strong>Email:</strong></label>
                                    <p class="form-control-static">{{ $submission->email }}</p>
                                </div>
                                <div class="form-group">
                                    <label><strong>Project Description:</strong></label>
                                    <div class="form-control-static" style="white-space: pre-wrap;">
                                        {{ $submission->project_description }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label><strong>Submitted:</strong></label>
                                    <p class="form-control-static">
                                        {{ $submission->created_at->format('F j, Y \a\t g:i A') }}</p>
                                </div>

                                <div class="form-group">
                                    <label><strong>Last Updated:</strong></label>
                                    <p class="form-control-static">
                                        {{ $submission->updated_at->format('F j, Y \a\t g:i A') }}</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><strong>Status:</strong></label>
                                    <form action="{{ route('admin.project-submissions.status', $submission->id) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <select name="status" class="form-control" onchange="this.form.submit()">
                                            <option value="pending"
                                                {{ $submission->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="approved"
                                                {{ $submission->status === 'approved' ? 'selected' : '' }}>Approved
                                            </option>
                                            <option value="rejected"
                                                {{ $submission->status === 'rejected' ? 'selected' : '' }}>Rejected
                                            </option>
                                        </select>
                                    </form>
                                </div>

                                <div class="form-group">
                                    <label><strong>Project File:</strong></label>
                                    @if ($submission->file_path)
                                        <div class="mt-2">
                                            <a href="{{ asset($submission->file_path) }}" target="_blank"
                                                class="btn btn-info btn-block">
                                                <i class="fas fa-download"></i> Download File
                                            </a>
                                        </div>
                                        <small class="text-muted">
                                            File: {{ basename($submission->file_path) }}
                                        </small>
                                    @else
                                        <p class="text-muted">No file uploaded</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
