@extends('layouts.app')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Daftar Akun</h2>
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nama -->
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input id="name" type="text" class="form-control" name="name" required autofocus>
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input id="email" type="email" class="form-control" name="email" required>
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="form-label">Kata Sandi</label>
          <input id="password" type="password" class="form-control" name="password" required>
        </div>

        <!-- Konfirmasi Password -->
        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
          <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
        </div>

        @if ($errors->any())
  <div class="alert alert-danger mt-3">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


        <!-- Tombol Daftar -->
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">
            Daftar
          </button>
        </div>

        <div class="text-center mt-3">
          Sudah punya akun? <a href="{{ route('login') }}">Login</a>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection
