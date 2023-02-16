@extends('template.app')

@section('content')
<h1 class="text-center">Room Lists</h1>
<div class="card-group">
  @foreach ($rooms as $room)
    <div class="card" style="width: 18rem;">
      <img src="{{ $room->image }}" class="card-img-top" alt="{{ $room->name }}">
      <div class="card-body">
        <h5 class="card-title">{{ $room->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $room->type['type'] }}</h6>
        <p class="card-text">{{ $room->price }}</p>
        <p class="card-text">Currently Available: {{ $room->available }} Rooms</p>
        <a href="#" class="btn btn-primary">Book Now!</a>
      </div>
    </div>
  @endforeach
</div>
@endsection