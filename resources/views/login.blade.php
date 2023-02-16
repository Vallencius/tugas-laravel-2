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
  <h2>Welcome!</h2>
  <form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control form-width" id="email" name="email" aria-describedby="emailHelp">
      @error('email')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('email') }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control form-width" id="password" name="password">
      @error('password')
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ $errors->first('password') }}
        </div>
      @enderror
      @if(session('status'))
        <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
          {{ session('status') }}
        </div>
      @endif
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
  <p class="text-center">Don't have an account yet? <br class="d-block d-sm-none"/><a href="{{ route('register') }}"  class="ps-1 text-color-green">Register now!</a></p>
</div>
@endsection