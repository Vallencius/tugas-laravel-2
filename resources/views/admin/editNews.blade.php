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
  <h2>Edit News</h2>
  <form action="{{ route('admin.news.edit') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="number" class="form-control form-width" id="id" name="id" aria-describedby="idHelp" value="{{ $news->id }}" hidden>
    <div class="mb-3">
      <label for="title" class="form-label">News Title</label>
      <input type="text" class="form-control form-width" id="title" name="title" aria-describedby="titleHelp" value="{{ $news->title }}">
      @error('title')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('title') }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="writer" class="form-label">News Writer</label>
      <input type="text" class="form-control form-width" id="writer" name="writer" aria-describedby="writerHelp" value="{{ $news->writer }}">
      @error('writer')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('writer') }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">News Content</label>
      <textarea type="text" class="form-control form-width" id="content" name="content" aria-describedby="priceHelp" rows="4">{{ $news->content }}</textarea>
      @error('content')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('content') }}
        </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection