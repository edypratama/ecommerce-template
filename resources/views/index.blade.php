@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Product Detail') }}
                        <div class="card-body">
                          <form action="{{ route('store_product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="1">Name</label>
                              <input type="text" name="name" id="1" class="form-control"> 
                            </div>
                            <div class="form-group">
                              <label for="2">Ddescription</label>
                              <input type="text" name="description" id="2"  class="form-control"> 
                            </div>
                            <div class="form-group">
                              <label for="3">Price</label>
                              <input type="number" id="3" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="4">Stock</label>
                              <input type="number" id="4" name="stock"  class="form-control"> 
                            </div>
                            <div class="form-group">
                              <label for="4">Image</label>
                              <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Save Change</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
