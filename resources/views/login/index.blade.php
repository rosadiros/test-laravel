@extends('main.layout')

@section('content')
    <div class="row justify-content-center mt-5">
      <div class="col-lg-5">
        @if(session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('status') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

          <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Belum Registrasi? <a href="/register">Registrasi Sekarang</a> </small>
            <p class="mt-5 mb-3 text-muted text-center">&copy; Copyright 2022 | Rosadi</p>
          </main>
      </div>
    </div>
    

@endsection