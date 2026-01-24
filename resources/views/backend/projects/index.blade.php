@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Projects </h3>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-outline-primary btn-fw">+ Add New Project</a>
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
                                        <th> # </th>
                                        <th> Project Name </th>
                                        <th> Project Description </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($projects as $index => $project)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $project->name }}</td>
                                            <td>{{ Str::limit($project->description, 50) }}</td>
                                            <td>
                                                <a href="{{ route('admin.projects.edit', $project->id) }}"
                                                    class="btn btn-outline-secondary btn-icon-text">Edit <i
                                                        class="mdi mdi-file-check btn-icon-append"></i></a>
                                                <form action="{{ route('admin.projects.delete', $project->id) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-icon-text"
                                                        onclick="return confirm('Are you sure you want to delete this project?')">Delete
                                                        <i class="mdi mdi-delete btn-icon-append"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No projects found.</td>
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
