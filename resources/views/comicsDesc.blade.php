@extends('layout.app')

@section('main-content')

<div class="blue-bar">
    <div class="container thumb">
        <div class="thumb">
            <img src="{{ $comics[$index]['thumb'] }}" alt="">
            <div class="top">{{ strtoupper($comics[$index]['type']) }}</div>
            <div class="bottom">VIEW GALLERY</div>
        </div>
    </div>
</div>
<div class="container desc py-5 d-flex">
    <div class="desc-box">
        <h2 class="title-comic">{{ $comics[$index]['title'] }}</h2>
    </div>
    <div class="adv-box">
        <p class="text-end">ADVERTISEMENT</p>
        <img src="{{ Vite::asset('resources/assets/images/adv.jpg') }}" alt="">
    </div>
</div>

@endsection