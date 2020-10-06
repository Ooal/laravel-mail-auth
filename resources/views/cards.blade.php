@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cards</div>

                <div class="card-body">
                  @foreach ($cards as $card)
                  <li>
                      <a href="{{route('show', $card -> id)}}">{{$card -> title}} {{$card -> subtitle}} </a>
                  </li>
                  @endforeach
                  </ul>
                  @auth
                    <h2><a class="btn btn-outline-primary" href="{{route('create')}}">New Card</a></h2>
                  @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
