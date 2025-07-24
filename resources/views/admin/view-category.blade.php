@extends('admin.includes.main')

@push('title')
<title>View Products</title>
@endpush

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card p-4 mt-4">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="d-flex mb-3">
                            <h4>View Products</h4>
                        </div>

                        <div class="table-responsive">
                            <table id="datatablesSimple" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $key => $product)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>${{ number_format($product->product_price, 2) }}</td>
                                            <td>
                                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">
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
</div>
@endsection
