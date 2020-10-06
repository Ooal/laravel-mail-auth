@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$card -> title}}</div>

                <div class="card-body">
                    <p>subtitle : {{$card -> subtitle}}</p>
                    <p>release : {{$card -> release}}</p>
                    <p>type : {{$card -> type}}</p>
                    <p>availability : {{$card -> availability}}</p>
                    <p>cost : {{$card -> cost}} £</p>
                    @auth
                      <a class="btn btn-outline-danger" href="{{route('destroy', $card -> id)}}">Delete</a>
                      <a class="btn btn-outline-primary" href="{{route('edit', $card -> id)}}">Edit</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
