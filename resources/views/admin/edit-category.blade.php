@extends('admin.includes.main')
@push('title')
<title>Edit Category</title>
@endpush

@section('content')
        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="card p-4 mt-4">
                            <div class="row">
                            
                            <div class="col-xl-8 col-md-8">
                                    <h4>Edit Category</h4>

                                    
                                        <div class="row mt-3">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" class="form-control" value="">
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Product Price</label>
                                            <input type="text" class="form-control" value="">
                                        </div>

                                         <div class="col-lg-12 mb-3">
                                            <label class="form-label">Product Quntaty</label>
                                            <input type="text" class="form-control" value="">
                                        </div>

                                         <div class="mb-3">
                <label>Product Details</label>
                <textarea name="product_details" class="form-control" required></textarea>
            </div>

                                        
                                        <div class="col-lg-3">
                                            <button class="btn btn-primary ">Edit Category</button>
                                        </div>
                                        </div>
                                    
                            </div>

                            
                            </div>

                            
                        </div>
                </main>


                

@endsection
                