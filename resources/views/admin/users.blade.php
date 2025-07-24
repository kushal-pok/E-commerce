@extends('admin.includes.main')

@push('title')
<title>Users</title>
@endpush

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <div class="card p-4 mt-4">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="d-flex">
                            <h4>Users</h4>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success mt-3">{{ session('success') }}</div>
                        @endif

                        <div class="mt-3">
                            <table id="datatablesSimple" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Phone No.</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $key => $user)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->phone ?? 'N/A' }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->address ?? 'N/A' }}</td>
                                        <td>
                                            @if($user->status === 'blocked')
                                                <span class="badge text-bg-danger">Blocked</span>
                                            @else
                                                <span class="badge text-bg-success">Unblocked</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->status === 'blocked')
                                            <form action="{{ route('admin.users.unblock', $user->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm" title="Unblock User">
                                                    <i class="fa-solid fa-shield"></i>
                                                </button>
                                            </form>
                                            @else
                                            <form action="{{ route('admin.users.block', $user->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Block User">
                                                    <i class="fa-solid fa-ban"></i>
                                                </button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>      
        </div>
    </main>
</div>
@endsection
