@extends('user.layouts.main')

@push('title')
<title>Settings</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main class="container p-4">

        {{-- Alerts --}}
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.settings.edit') }}" method="POST" enctype="multipart/form-data" class="card p-4">
            @csrf

            <div class="row">
                <div class="col-xl-8 col-md-8">
                    <h4>Account Settings</h4>

                    <div class="row mt-3">
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" value="{{ old('first_name', explode(' ', $user->name)[0] ?? '') }}">
                            @error('first_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" value="{{ old('last_name', explode(' ', $user->name)[1] ?? '') }}">
                            @error('last_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="you@example.com" value="{{ old('email', $user->email) }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" name="phone" class="form-control" placeholder="+977" value="{{ old('phone', $user->phone) }}">
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 mt-5">
                    <div class="text-center">
                       <img 
    src="{{ Auth::user()->image ? asset('storage/profile_images/'.Auth::user()->image) : asset('dashboard/assets/img/user.png') }}" 
    class="rounded-circle" 
    style="width:40px; height:40px; object-fit:cover;"
    alt="Profile">

<p>{{ Auth::user()->name }}</p>
<p class="small text-muted">{{ Auth::user()->email }}</p>
                        <div class="mt-3">
                            <label for="image" class="form-label btn btn-dark">Choose Image</label>
                            <input type="file" class="form-control d-none" id="image" name="image">
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="mt-4">Billing Address</h4>

            <div class="row mt-3">
                <div class="col-lg-12 mb-3">
                    <label class="form-label">Country</label>
                    <input type="text" name="billing_country" class="form-control" placeholder="Country" value="{{ old('billing_country', optional(json_decode($user->billing_address))->country) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="billing_first_name" class="form-control" placeholder="First Name" value="{{ old('billing_first_name', optional(json_decode($user->billing_address))->first_name) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="billing_last_name" class="form-control" placeholder="Last Name" value="{{ old('billing_last_name', optional(json_decode($user->billing_address))->last_name) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="billing_email" class="form-control" placeholder="Email" value="{{ old('billing_email', optional(json_decode($user->billing_address))->email) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" name="billing_phone" class="form-control" placeholder="Phone" value="{{ old('billing_phone', optional(json_decode($user->billing_address))->phone) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Pin Code</label>
                    <input type="text" name="billing_pin_code" class="form-control" placeholder="Pin Code" value="{{ old('billing_pin_code', optional(json_decode($user->billing_address))->pin_code) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Landmark</label>
                    <input type="text" name="billing_landmark" class="form-control" placeholder="Landmark" value="{{ old('billing_landmark', optional(json_decode($user->billing_address))->landmark) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">City</label>
                    <input type="text" name="billing_city" class="form-control" placeholder="City" value="{{ old('billing_city', optional(json_decode($user->billing_address))->city) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">State</label>
                    <input type="text" name="billing_state" class="form-control" placeholder="State" value="{{ old('billing_state', optional(json_decode($user->billing_address))->state) }}">
                </div>

                <div class="col-lg-3 mb-5">
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                </div>
            </div>
        </form>
    </main>
</div>

@endsection
