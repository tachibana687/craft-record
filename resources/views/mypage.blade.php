@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        @foreach ($works as $work)
            <div class="card" style="width: 18rem;">
                <img src="{{$work->work_image}}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{$work->work_name}}</h5>
                    <p class="card-text">{{$work->outline}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection