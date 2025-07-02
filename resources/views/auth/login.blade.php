@extends('layouts.app')

@section('content')
<section class="book_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Login</h2>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        {{ $errors->first() }}
      </div>
    @endif

    <div class="row justify-content-center">
      <div class="col-md-6">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="form-group mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-warning w-100">Login</button>
          </div>

          <div class="text-center mt-3 text-muted">
  Belum punya akun?
  <a href="{{ route('register') }}">Daftar di sini</a>
</div>

        </form>
      </div>
    </div>
  </div>
</section>
@endsection
