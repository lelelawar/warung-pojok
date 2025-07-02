@extends('layouts.app')

@section('content')
<!-- food section -->
<section class="food_section layout_padding" id="menu">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Menu Kami</h2>
    </div>
    <div class="row">
      @foreach ($produk as $item)
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}">
            </div>
            <div class="detail-box">
              <h5>{{ $item->nama }}</h5>
              <h6>Rp{{ number_format($item->harga) }}</h6>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
