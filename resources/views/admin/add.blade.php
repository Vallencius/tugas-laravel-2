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
  <h2>Add New Room</h2>
  <form action="{{ route('addRoom') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Room Name</label>
      <input type="text" class="form-control form-width" id="name" name="name" aria-describedby="nameHelp">
      @error('name')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('name') }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="room_type" class="form-label">Room Type</label>
      <select class="form-select form-width" aria-label="Default select example" name="room_type" id="room_type">
        @foreach($types as $key => $type)
          <option value="{{ $key+1 }}">{{ $type->type }}</option>
        @endforeach
      </select>
      @error('room_type')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('room_type') }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Room Price</label>
      <input type="number" class="form-control form-width" id="price" name="price" aria-describedby="priceHelp">
      @error('price')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('price') }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="available" class="form-label">Room Quantity</label>
      <input type="number" class="form-control form-width" id="available" name="available" aria-describedby="priceHelp">
      @error('available')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('available') }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Add image</label>
      <input type="file" class="form-control form-width" id="image" name="image">
      @error('image')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('image') }}
        </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection