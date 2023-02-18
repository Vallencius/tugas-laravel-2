@extends('template.app')

@section('custom-css')
<style>
  .title{
    font-size: 50px;
  }
  .img-size{
    width: 20vw;
  }
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
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
    @foreach ($rooms as $room)
    <div class="well">
        <div class="media">
          <a class="pull-left" href="#">
            <img src="{{ asset("storage/room/".$room->image) }}" class="media-object img-size" alt="{{ $room->name }}">
        </a>
        <div class="media-body">
          <h4 class="media-heading">{{ $room->name }}</h4>
            <p class="text-right">{{ $room->type['type'] }}</p>
            @if ($room->promo != 0)
              <p><del class="text-muted"><small>Rp {{ $room->price }}</small></del>
                <span>Rp {{ $room->price*(100-$room->promo)/100 }}</span>
              </p>
            @else
              <p>Rp {{ $room->price }}</p>
            @endif
            
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
@endsection