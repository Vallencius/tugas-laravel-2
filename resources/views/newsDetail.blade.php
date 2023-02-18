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
<div class="container mt-4">
  <a href="{{ route('news') }}" class="btn btn-primary">&laquo; Back</a>
  <p class="text-center title">{{ $news->title }}</p>
  <img src="{{ asset("storage/news/".$news->image) }}" class="card-img" alt="{{ $news->title }}">
  <p class="card-text"><small class="text-muted">{{ $news->writer }} - {{ $news->created_at->toDateString() }}</small></p>
  <p class="text-center">{{ $news->content }}</p>
</div>
@endsection