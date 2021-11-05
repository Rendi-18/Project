@extends('layouts.main')

@section('content')

@include('layouts.carousel.carousel')


<div class="row">
    @foreach ($funitures as $funiture)
    <div class="col-lg-4">
        <div class="card}">
            <img src="/img/{{ $funiture->foto }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text">{{ $funiture->jenis->nama }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection