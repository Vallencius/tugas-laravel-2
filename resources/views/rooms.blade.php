@extends('template.app')

@section('custom-css')
<style>
  .title{
    font-size: 50px;
  }
  .img-size{
    height: 30vh;
  }
</style>
@endsection

@section('content')
<div class="container">
  <p class="text-center title">Room Lists</p>
  <a href="{{ route('home') }}" class="btn btn-primary">&laquo; Back</a>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach ($rooms as $room)
      <div class="col">
        <div class="card" style="width: 18rem; height: auto;">
          <img src="{{ $room->image }}" class="card-img-top img-size" alt="{{ $room->name }}">
          <div class="card-body">
            <p class="card-title">{{ $room->name }}</p>
            <p class="card-subtitle mb-2 text-muted">{{ $room->type['type'] }}</p>
            <p class="card-text">Rp {{ $room->price }}</p>
            <p class="card-text">Currently Available: {{ $room->available }} Rooms</p>
            <a href="@if(Auth::check()) # @else {{ route('login') }} @endif" class="btn btn-primary">Book Now!</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection