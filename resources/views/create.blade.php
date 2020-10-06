@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{route('index')}}">Cards</a></div>

                <div class="card-body">
                  <form action="{{route('store')}}" method="post">
                      @csrf
                      @method('POST')

                      <div class="user-box">
                        <input type="text" name="title" value="">
                        <label for="title">title</label>
                      </div>
                      <div class="user-box">
                        <input type="text" name="subtitle" value="">
                        <label for="subtitle">subtitle</label>
                      </div>
                      <div class="user-box">
                        <input type="text" name="type" value="">
                        <label for="type">type</label>
                      </div>
                      <div class="user-box">
                        <input type="date" name="release" value="">
                      </div>
                      <div class="user-box">
                        <input type="text" name="cost" value="">
                        <label for="cost">cost (£)</label>
                      </div>
                      <div class="user-box">
                        <input type="text" name="availability" value="">
                        <label for="availability">availability</label>
                      </div>
                      <button class="btn btn-outline-primary" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
