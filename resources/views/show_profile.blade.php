@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}
                        <div class="card-body">
                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p> {{$error}} </p>
                            @endforeach
                        @endif
                    
                        <p>Name : {{$user->name}}</p>
                        <p>Email : {{$user->email}}</p>
                        <p>Role : {{$user->role ? 'admin' : 'member'}}</p>
                    
                        <form action="{{route('edit_profile')}} " method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name :</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="">Email :</label>
                                <input type="text" name="email" class="form-control" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="">Password :</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password :</label>
                                <input class="form-control" type="password" name="password_confirmation">
                            </div>
                                <button type="submit" class="btn btn-primary mt-3">Change Profile Details</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
