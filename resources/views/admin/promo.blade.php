@extends('template.app')

@section('custom-css')
<style>
  .form-width{
    max-width: 50vw;
    margin: auto;
  }
</style>
@endsection

@section('content')
<div class="text-center">
  <h2>Set Room Promo</h2>
  <form action="{{ route('admin.promo.set') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="number" class="form-control form-width" id="id" name="id" aria-describedby="idHelp" value="{{ $room->id }}" hidden>
    <div class="mb-3">
      <label for="name" class="form-label">Room Name</label>
      <input type="text" class="form-control form-width" id="name" name="name" aria-describedby="nameHelp" disabled value="{{ $room->name }}">
      @error('name')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('name') }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="promo" class="form-label">Set Promo</label>
      <input type="number" class="form-control form-width" id="promo" name="promo" aria-describedby="promoHelp" value="{{ $room->promo }}">
      <div id="emailHelp" class="form-text">Promo can only be set from 0 to 100 (In Percent)</div>
      @error('promo')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('promo') }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <p>Original Price: Rp {{ $room->price }}</p>
    </div>
    <button type="submit" class="btn btn-primary" onclick="return confirm('Ubah promo?');">Submit</button>
  </form>
</div>
@endsection