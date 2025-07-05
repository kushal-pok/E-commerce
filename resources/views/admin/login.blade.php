@extends('admin.layouts.main')

@push('title')
<title>Admin Login</title>
@endpush

@section('content')
<section>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('dashboard/assets/img/admin.jpg') }}" class="rounded-3 img-fluid">
                    </div>

                    <div class="col-lg-6 mt-5 p-5">
                        <form method="POST" action="{{ route('admin.login.submit') }}">
                            @csrf

                            <h3 class="mb-4">Admin Login</h3>

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    {{ $errors->first() }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="admin@example.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="******" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login as Admin</button>
                            </div>
                        </form>
                    </div>
                      {{-- <div class="d-flex justify-content-end mt-3">
    <a href="{{ route('admin.register') }}" class="btn btn-outline-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Register as Admin
    </a> --}}
</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
