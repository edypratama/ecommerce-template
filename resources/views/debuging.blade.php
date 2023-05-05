@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">{{ __('Product') }}

                            <div class="container text-center">
                                @foreach ($products as $product)
                                <div class="row">
                                    <div class="col" style="widht: 18rem;">
                                        <img src=" {{ url('storage/' . $product->image) }} " class="card-img-top"
                                        alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">{{ $product->name }}</p>
                                            <form action="{{ route('show_product', $product) }}" method="GET">
                                                <button type="submit" class="btn btn-primary">Show Detail</button>
                                            </form>
                                            @if (Auth::check() && Auth::user()->is_admin)
                                            <form action="{{ route('delete_product', $product) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger mt-2">Delete</button>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection











<div class="container text-center">
    <div class="row">
      <div class="col">
        Column
      </div>
      <div class="col">
        Column
      </div>
      <div class="col">
        Column
      </div>
    </div>
  </div>