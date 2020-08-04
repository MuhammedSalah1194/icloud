@extends('layouts.test')

@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('images/69408436_1388036261354016_567625867136598016_n.jpg') }}" class="card-img-top" alt="..." height="300" width="300">
        <div class="card-body">
            <h5 class="card-title">{{__('messages.hi')}}</h5>
            <p class="card-text">Dandrawy</p>
            <a href="#" class="btn btn-primary">toggle</a>
        </div>
    </div>
@endsection