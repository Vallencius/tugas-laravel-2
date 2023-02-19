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
<div class="container pt-5 bg-dark">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card border-0 shadow rounded-3 my-5 bg-secondary">
        <div class="card-body p-4 p-sm-5">
          <h5 class="card-title text-center mb-5 fw-bold fs-3"><b>Welcome!</b></h5>
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="name@example.com">
              <label for="email">Email address</label>
              @error('email')
                <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
                  {{ $errors->first('email') }}
                </div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              <label for="password">Password</label>
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
            <div class="d-grid">
              <button class="btn btn-warning btn-login text-uppercase fw-bold" type="submit">
                LOGIN
              </button>
            </div>
            <hr class="my-4">
            <div class="d-grid mb-0">
                <p class="text-center my-4">Don't have an account yet? <br class="d-block d-sm-none"/><a href="{{ route('register') }}"  class="ps-1 text-warning">Register now!</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection