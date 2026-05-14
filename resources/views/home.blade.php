@extends('layout.app')

@section('title', 'Home')

@section('content')
   <section style="background-color: #fff5eb; padding: 50px 0; font-size: 25px; margin-top: 50px" id="home">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6">
        <h1 style="font-size: 55px;">PORTOFOLIO</h1>
        <p>Devi Aprilia Lestari</p>
      </div>

      <div class="col-12 col-md-6 text-md-end">
        <img src="{{ asset('img/profil.png') }}" alt="Foto">
      </div>
    </div>
  </div>
</section>
@endsection