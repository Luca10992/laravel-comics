@extends('layout.app')

@section('main-content')

<div class="comics">
    <div class="container pt-5 pb-4">
        <div class="row g-4">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <p>{{ strtoupper($comic['series']) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <button class="btn btn-primary">LOAD MORE</button>
        </div>
    </div>
</div>

@endsection