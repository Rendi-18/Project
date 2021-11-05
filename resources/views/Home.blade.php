@extends('layouts.main')

@section('content')

@include('layouts.carousel.carousel')

<div class="row">
    <div class="col-md-6">
        <h1 class="mb-3">DAFTAR FUNITURE</h1>
    </div>
    <div class="col-md-6">
        <form action="/">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari..." name="search" value="{{request('search')}}">
                <button class="btn btn-success" type="submit" id="button-addon2">Cari</button>
            </div>
        </form>
    </div>
</div>


<div class="row">
    @foreach ($funitures as $funiture)
    <div class="col-sm-4 col-6 col-lg-3">
        <div class="card mb-4">
            <img src="/img/{{ $funiture->foto }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="text-center card-text fw-bold text-uppercase"><a class="" href="">{{ $funiture->nama }}.</a></p>
                <div class="card text-center pt-2 pb-2">{{ $funiture->jenis->nama }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection