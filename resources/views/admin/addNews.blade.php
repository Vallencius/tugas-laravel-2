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
<div class="text-center text-light pt-5">
  <h2>Add New News</h2>
  <form action="{{ route('admin.news.add') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">News Title</label>
      <input type="text" class="form-control form-width" id="title" name="title" aria-describedby="titleHelp">
      @error('title')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('title') }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="writer" class="form-label">News Writer</label>
      <input type="text" class="form-control form-width" id="writer" name="writer" aria-describedby="writerHelp">
      @error('writer')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('writer') }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">News Content</label>
      <textarea type="text" class="form-control form-width" id="content" name="content" aria-describedby="priceHelp" rows="4"></textarea>
      @error('content')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('content') }}
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