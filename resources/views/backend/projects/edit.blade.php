@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit Project </h3>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-primary btn-fw">Back</a>
            
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('admin.projects.update', $project->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Project Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}" placeholder="Project Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Project Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $project->description) }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="link">Project Link</label>
                                <input type="url" class="form-control" id="link" name="link" value="{{ old('link', $project->link) }}" placeholder="Project Link">
                                @error('link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Project Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @if($project->image)
                                    <div class="mt-2">
                                        <img src="/{{ $project->image }}" alt="Project Image" width="120">
                                    </div>
                                @endif
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-dark">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
