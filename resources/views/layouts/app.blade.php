<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Warung Pojok</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- Custom styles -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,600&display=swap" rel="stylesheet" />
</head>
<body>

  <!-- 🔥 Hero Area Khusus untuk Halaman Home -->
  @if(request()->is('/'))
  <div class="hero_area">
    <div class="bg-box">
      <img src="{{ asset('images/hero-bg.jpg') }}" alt="background">
    </div>
  @endif

    <!-- 🔝 Navbar -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="{{ url('/') }}">
            <span>Warung Pojok</span>
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class=""></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/#menu') }}">Menu</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/#about') }}">Tentang</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/#book') }}">Reservasi</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('produk.index') }}">Produk</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('kategori.index') }}">Kategori</a></li>
            </ul>

            <!-- 👤 User Dropdown -->
            <div class="d-flex align-items-center gap-2">
              @auth
              <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle btn-sm" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  👤 {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                  <li>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="dropdown-item text-danger">🔒 Logout</button>
                    </form>
                  </li>
                </ul>
              </div>
              @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-warning"><i class="fa fa-user"></i> Login</a>
              @endauth

              <a class="cart_link" href="#">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>

  @if(request()->is('/'))
  </div> <!-- Penutup hero_area hanya untuk halaman home -->
  @endif

  <!-- 🔽 Konten Halaman -->
  <main class="py-5">
    @yield('content')
  </main>

  <!-- 🔻 Footer -->
  <footer class="footer_section mt-5">
    <div class="container">
      <p class="text-center">&copy; {{ date('Y') }} Warung Pojok. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
