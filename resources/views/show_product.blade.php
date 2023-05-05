@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Product Detail') }}
                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                                <div class="">
                                    <img src="{{ url('storage/', $product->image) }}" alt="" width="200px">
                                </div>
                                <div class="">
                                    <h1>{{ $product->name }}</h1>
                                    <h6>{{ $product->description }}</h6>
                                    <h3>{{ $product->price }}</h3>
                                    <hr>
                                    <p>{{ $product->stock }} left</p>
                                    @if (!Auth::user()->is_admin)
                                    <form action=" {{ route('add_to_cart', $product) }} " method="POST">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="number" name="amount" class="form-control"
                                            aria-describedby="basic-addon2" value=1>
                                        </div>
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">Add Cart</button>
                                        </div>
                                    </form>
                                    @else
                                    <form action="{{ route('edit_product', $product) }}" method="GET">
                                        <button type="submit" class="btn btn-primary mt-3">Edit Product</button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p> {{ $error }} </p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
