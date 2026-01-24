@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="page-header d-flex justify-content-between align-items-center">
            <h3 class="page-title">Contact Details</h3>
            <div >
                <a href="{{ route('admin.contacts') }}" class="btn btn-outline-secondary btn-fw">
                    <i class="mdi mdi-arrow-left"></i> Back to Contacts
                </a>
                <form action="{{ route('admin.contacts.delete', $contact->id) }}" method="POST"
                    style="display:inline-block; margin-left: 10px;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-fw"
                        onclick="return confirm('Are you sure you want to delete this contact?')">
                        <i class="mdi mdi-delete"></i> Delete Contact
                    </button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contact Information</h4>

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Name:</label>
                                    <p class="form-control-static">{{ $contact->name }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Email:</label>
                                    <p class="form-control-static">
                                        <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Phone:</label>
                                    <p class="form-control-static">
                                        <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Date:</label>
                                    <p class="form-control-static">{{ $contact->created_at->format('F j, Y \a\t g:i A') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="font-weight-bold">Message:</label>
                                    <div class="card">
                                        <div class="card-body" style="background-color: #000; border-radius: 5px;">
                                            <p class="mb-0" style="white-space: pre-wrap;">{{ $contact->message }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quick Actions</h4>

                        <div class="d-grid">
                            <a href="mailto:{{ $contact->email }}?subject=Re: Contact from {{ $contact->name }}"
                                class="btn btn-primary btn-fw mb-2">
                                <i class="mdi mdi-email"></i> Reply via Email
                            </a>

                            <a href="tel:{{ $contact->phone }}" class="btn btn-success btn-fw mb-2">
                                <i class="mdi mdi-phone"></i> Call {{ $contact->name }}
                            </a>

                            <button class="btn btn-info btn-fw mb-2" onclick="copyToClipboard('{{ $contact->email }}')">
                                <i class="mdi mdi-content-copy"></i> Copy Email
                            </button>

                            <button class="btn btn-warning btn-fw" onclick="copyToClipboard('{{ $contact->phone }}')">
                                <i class="mdi mdi-content-copy"></i> Copy Phone
                            </button>
                        </div>

                        <hr>

                        <h5 class="card-title">Contact Details</h5>
                        <div class="contact-info">
                            <p><strong>ID:</strong> #{{ $contact->id }}</p>
                            <p><strong>Created:</strong> {{ $contact->created_at->diffForHumans() }}</p>
                            <p><strong>Updated:</strong> {{ $contact->updated_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                // Show a temporary success message
                const button = event.target.closest('button');
                const originalText = button.innerHTML;
                button.innerHTML = '<i class="mdi mdi-check"></i> Copied!';
                button.classList.remove('btn-info', 'btn-warning');
                button.classList.add('btn-success');

                setTimeout(function() {
                    button.innerHTML = originalText;
                    button.classList.remove('btn-success');
                    if (originalText.includes('Email')) {
                        button.classList.add('btn-info');
                    } else {
                        button.classList.add('btn-warning');
                    }
                }, 2000);
            }).catch(function(err) {
                console.error('Could not copy text: ', err);
            });
        }
    </script>
@endsection
