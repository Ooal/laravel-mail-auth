@extends('layouts.mail')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{$action}} : {{$user -> name}} - {{$user -> email}}</div>
                <br><br>
                <div class="card-body">
                    <p>subtitle : {{$card -> title}}</p>
                    <p>subtitle : {{$card -> subtitle}}</p>
                    <p>release : {{$card -> release}}</p>
                    <p>type : {{$card -> type}}</p>
                    <p>availability : {{$card -> availability}}</p>
                    <p>cost : {{$card -> cost}} £</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
