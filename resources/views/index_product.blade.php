@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                            <div class="card-grid" style=" display: grid;
                            grid-template-columns: repeat(3, 1fr);
                            grid-gap: 1rem;">
                                @foreach ($products as $product)
                                <div style=" display: flex;
                                flex-direction: column;
                                border: 1px solid #ccc;
                                widht: 300px;
                                box-sizing: border-box;">
                                  <img src=" {{ url('storage/' . $product->image) }} " style="height: 200px;
                                  object-fit: cover; widht: 150px;" alt="Card image cap">
                                  <div style="flex: 1;
                                  display: flex;
                                  flex-direction: column;
                                  justify-content: space-between;
                                  padding: 1rem;">
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
                                @endforeach
                              </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
