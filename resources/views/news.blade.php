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
<div class="container mt-5">
  <p class="text-center title">Hotel News</p>
  <a href="{{ route('home') }}" class="btn btn-primary mb-4">&laquo; Back</a>
  @foreach ($news as $new)
    <div class="card mb-3 w-90">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="{{ asset("storage/news/".$new->image) }}" class="card-img" alt="{{ $new->title }}">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ $new->title }}</h5>
            <?php preg_match("/(?:\w+(?:\W+|$)){0,20}/", $new->content, $matches); ?>
            <p class="card-text">{{ $matches[0] }}...</p>
            <p class="card-text"><small class="text-muted">{{ $new->writer }} - {{ $new->created_at->toDateString() }}</small></p>
            @if(Auth::check())
              @auth
                  @if(Auth::user()->role == 'Admin')
                      <a class="btn btn-warning" href="/admin/news/edit/{{ $new->id }}" >Edit News</a>
                  @else
                      <a href="/news/detail/{{ $new->id }}" class="btn btn-primary">See More</a>
                  @endif
              @endauth
            @else
                <a href="/news/detail/{{ $new->id }}" class="btn btn-primary">See More</a>
            @endif
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection