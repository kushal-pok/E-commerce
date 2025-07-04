@extends('admin.includes.main')
@push('title')
<title>View Category</title>
@endpush

@section('content')
        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    
                        <div class="card p-4 mt-4">
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="d-flex">
                                        <h4>View Categories</h4>
                                        
                                    </div>
                                    <div class="mt-3">
                                    <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                    <th scope="col"><h5>Sr. No.</h5></th>
                                    <th scope="col"><h5>Product Name</h5></th>
                                    <th scope="col"><h5>Price</h5></th>
                                  
                                    <th scope="col"><h5>Action</h5></th>
                                    
                                    </tr>
                                </thead>
                            <tbody>
    @foreach($categories as $key => $category)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $category->product_name }}</td>
        <td>${{ $category->price }}</td>
        <td>
            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </form>
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


                

@endsection
                