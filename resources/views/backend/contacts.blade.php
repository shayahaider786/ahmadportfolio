@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Contacts</h3>
            {{-- <a href="{{ route('admin.blogs.create') }}" class="btn btn-outline-primary btn-fw">+ Add New Blog</a> --}}
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contact List</h4>
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> name </th>
                                        <th> emial </th>
                                        <th> phone </th>
                                        <th> message </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($contacts as $index => $contact)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone }}</td>
                                            <td>{{ Str::limit($contact->message, 50) }}</td>
                                            <td>
                                                <a href="{{ route('admin.contacts.show', $contact->id) }}" 
                                                   class="btn btn-outline-primary btn-icon-text">
                                                    View <i class="mdi mdi-eye btn-icon-append"></i>
                                                </a>
                                                <form action="{{ route('admin.contacts.delete', $contact->id) }}"
                                                    method="POST" style="display:inline-block; margin-left: 5px;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-icon-text"
                                                        onclick="return confirm('Are you sure you want to delete this contact?')">Delete
                                                        <i class="mdi mdi-delete btn-icon-append"></i></button>
                                                </form>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No contacts found.</td>
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
