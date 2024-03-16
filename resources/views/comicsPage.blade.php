@extends('layout.app')

@section('main-content')

<div class="comics">
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <p>{{ strtoupper($comic['series']) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection