@extends('admin.includes.main')

@push('title')
<title>Add Product</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="container mt-4">
                <div class="card p-4">
                    <h4>Add New Product</h4>

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label>Product Name</label>
                            <input type="text" name="product_name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Product Details</label>
                            <textarea name="product_details" class="form-control" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Product Price</label>
                            <input type="number" name="product_price" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Product Quantity</label>
                            <input type="number" name="product_quantity" class="form-control" value="0" min="0" required>
                        </div>

                        <div class="mb-3">
                            <label>Product Image</label>
                            <input type="file" name="product_image" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
