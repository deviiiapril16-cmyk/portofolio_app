@extends('layout.app')

@section('title', 'About')

@section('content')
<section class="py-5" id="kontak" style="background-color: #fff5eb; margin-top: 50px;">
  <div class="container">
    <div class="row align-items-center">
    <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
      <img src="{{ asset('img/animasi.png') }}" alt="Foto" class="img-fluid rounded" style="max-width: 520px;">
    </div>

    <div class="col-12 col-md-6" style="font-size: 18px;">
      <h2 class="fw-bold mb-4">Kontak</h2>
      <p><strong>Nama:</strong> Kebumen, 16 April 2005</p>
      <p><strong>Email:</strong> deviiiapril16@gmail.com</p>
      <p><strong>No. HP:</strong> 083863907997</p>
      <p><strong>Alamat:</strong> Desa Karangsari RT.01/RW.02, Kec. Buayan, Kab. Kebumen</p>
    </div>
    </div>
  </div>
</section>
@endsection