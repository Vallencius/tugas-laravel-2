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
<div class="container  mt-5">
  <p class="text-center title">Room Lists</p>
  @if(session('status'))
    <div style="color:green; margin:auto; text-align:center;">
      {{ session('status') }}
    </div>
  @endif
  <a href="{{ route('home') }}" class="btn btn-primary mb-4">&laquo; Back</a>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach ($rooms as $room)
      <div class="col">
        <div class="card" style="width: 18rem; height: auto;">
          <img src="{{ asset("storage/room/".$room->image) }}" class="card-img-top img-size" alt="{{ $room->name }}">
          <div class="card-body">
            <p class="card-title">{{ $room->name }}</p>
            <p class="card-subtitle mb-2 text-muted">{{ $room->type['type'] }}</p>
            @if ($room->promo != 0)
              <p class="card-text"><del class="text-muted"><small>Rp {{ $room->price }}</small></del>
                <span class="card-text">Rp {{ $room->price*(100-$room->promo)/100 }}</span>
              </p>
            @else
              <p class="card-text">Rp {{ $room->price }}</p>
            @endif
            <p class="card-text">Currently Available: {{ $room->available }} Rooms</p>
            @if(Auth::check())
              @auth
                  @if(Auth::user()->role == 'Admin')
                      <a class="btn btn-warning" href="/admin/edit/{{ $room->id }}" >Edit Room</a>
                  @else
                      <a href="/book/{{ $room->id }}" class="btn btn-primary">Book Now!</a>
                  @endif
              @endauth
            @else
              <a href="{{ route('login') }}" class="btn btn-primary">Book Now!</a>
            @endif
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection