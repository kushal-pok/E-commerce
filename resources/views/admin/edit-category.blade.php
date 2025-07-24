@extends('admin.includes.main')

@push('title')
<title>Edit Product</title>
@endpush

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card p-4 mt-4">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        <h4>{{ isset($product) ? 'Edit Product' : 'Add Product' }}</h4>

                        {{-- Product Form --}}
                        <form 
                            action="{{ isset($product) ? route('admin.products.update', $product->id) : route('admin.products.store') }}" 
                            method="POST"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            @if(isset($product))
                                @method('PUT')
                            @endif

                            <div class="row mt-3">
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Product Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}" required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Product Price</label>
                                    <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $product->price ?? '') }}" required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Product Quantity</label>
                                    <input type="number" name="quantity" class="form-control" value="{{ old('quantity', $product->quantity ?? '') }}" required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Product Details</label>
                                    <textarea name="details" class="form-control" required>{{ old('details', $product->details ?? '') }}</textarea>
                                </div>

                                {{-- Optional: Image Upload --}}
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Product Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @if(isset($product) && $product->image)
                                        <img src="{{ asset('storage/products/'.$product->image) }}" width="100" class="mt-2">
                                    @endif
                                </div>

                                <div class="col-lg-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ isset($product) ? 'Update Product' : 'Add Product' }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        {{-- End Form --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
