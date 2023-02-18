@extends('template.app')

@section('custom-css')
<style>
  .form-width{
    max-width: 50vw;
    margin: auto;
  }

  .img-size{
    height: 50vh;
  }
</style>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-6 mx-auto">
      <div class="card border-0 shadow rounded-3 my-5">
        <img src="{{ asset("storage/room/".$room->image) }}" class="card-img-top img-size mb-0" alt="{{ $room->name }}">
        <div class="card-body p-2 p-sm-5">
          <h5 class="card-title text-center mb-4 fw-light fs-5">{{ $room->name }}</h5>
          <form action="{{ route('bookRoom') }}" method="POST">
            @csrf
            <input type="number" class="form-control form-width" id="user_id" name="user_id" aria-describedby="user_idHelp" value="{{ Auth::user()->id }}" hidden>
            <input type="number" class="form-control form-width" id="room_id" name="room_id" aria-describedby="room_idHelp" value="{{ $room->id }}" hidden>
            <div class="form-floating mb-3">
              <input type="date" class="form-control" id="check_in" name="check_in" aria-describedby="check_inHelp" placeholder="name@example.com">
              <label for="check_in">Check-In</label>
            </div>
            <div class="form-floating mb-3">
              <input type="date" class="form-control" id="check_out" name="check_out" aria-describedby="check_outHelp" placeholder="name@example.com">
              <label for="check_out">Check-Out</label>
            </div>
            <div class="d-grid">
              <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">
                Book
              </button>
            </div>
            <hr class="my-4">
            <div class="d-grid mb-0">
                <p class="text-center my-4">Want To Change Room? <br class="d-block d-sm-none"/><a href="{{ route('rooms') }}"  class="ps-1 text-color-green">Find Other Rooms!</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection