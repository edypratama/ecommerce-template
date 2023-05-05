@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Order') }}
                        <div class="card-body m-auto">
                            @foreach ($orders as $order)
                                <div class="card mb-2" style="widht: 30rem ;">
                                    <div class="card-body">
                                        <a href=" {{ route('show_order', $order) }} ">
                                            <h5 class="card-title">Order Id {{ $order->id }}</h5>
                                        </a>
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $order->user->name }}</h6>
                                        @if ($order->is_paid == true)
                                            Paid
                                        @else
                                            Unpaid
                                            @if ($order->payment_receipt)
                                            <div class="d-flex flew-row justify-content-around">
                                                <a href="{{ url('storage/' . $order->payment_receipt) }}" class="btn btn-primary">
                                                    Show Payment Receipt
                                                </a>
                                                @if (Auth::user()->is_admin)    
                                                <form action="{{ route('confirm_payment', $order) }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-success" name="submit" type="submit">Confirm</button>
                                                </form>
                                                @endif
                                            </div>
                                            @endif
                                        @endif
                                        </p>
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
