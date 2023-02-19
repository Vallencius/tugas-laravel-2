@extends('template.app')

@section('content')
<section class="h-100 bg-dark" style="background-color: #eee; height:fit-content">
  <div class="container pt-5 bg-dark">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black bg-secondary" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>
                <form class="mx-1 mx-md-4" action="{{ route('register') }}" method="POST">
                  @csrf
                  <div class="d-flex flex-row align-items-center">
                    <div class="form-floating flex-fill mb-0">
                      <input type="text" id="name" name="name" class="form-control" />
                      <label for="name">Your Name</label>
                    </div>
                  </div>
                  @error('name')
                    <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
                      {{ $errors->first('name') }}
                    </div>
                  @enderror

                  <div class="d-flex flex-row align-items-center mt-4">
                    <div class="form-floating flex-fill mb-0">
                      <input type="email" id="email" name="email" class="form-control" />
                      <label for="email">Your Email</label>
                    </div>
                  </div>
                  @error('email')
                    <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
                      {{ $errors->first('email') }}
                    </div>
                  @enderror

                  <div class="d-flex flex-row align-items-center mt-4">
                    <div class="form-floating flex-fill mb-0">
                      <input type="password" id="password" name="password" class="form-control" />
                      <label for="password">Password</label>
                    </div>
                  </div>
                  @error('password')
                    <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
                      {{ $errors->first('password') }}
                    </div>
                  @enderror

                  <div class="d-flex flex-row align-items-center mt-4">
                    <div class="form-floating flex-fill mb-0">
                      <input type="password" id="confirm" name="confirm" class="form-control" />
                      <label for="confirm">Repeat your password</label>
                    </div>
                  </div>
                  @error('confirm')
                    <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
                      {{ $errors->first('confirm') }}
                    </div>
                  @enderror
                  @if(session('status'))
                    <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
                      {{ session('status') }}
                    </div>
                  @endif

                  <div class="d-flex justify-content-center mx-4 mt-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-warning btn-lg flex-fill">Register</button>
                  </div>
                </form>
                {{-- <hr class="my-4"> --}}

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://images.unsplash.com/photo-1586611292717-f828b167408c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection