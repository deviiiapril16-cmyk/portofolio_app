@extends('layout.app')

@section('title', 'Portofolio')

@section('content')

<!-- HOME -->
<section id="home" class="py-5" style="min-height:100vh;">
    <div class="container">

        <div class="row align-items-center justify-content-center min-vh-100">

            <div class="col-lg-6 text-center text-lg-start">

                <h1 class="fw-bold display-2">
                    PORTOFOLIO
                </h1>

                <h3 class="mt-3">
                    Devi Aprilia Lestari
                </h3>

                <a href="#karya"
                   class="btn px-4 py-2 mt-3"
                   style="background:#EC4899;color:white;border-radius:30px;">
                   Lihat Karya
                </a>

            </div>

            <div class="col-lg-6 text-center mt-5 mt-lg-0">

                <img src="{{ asset('img/profil.png') }}"
                    alt="Foto Profil"
                    class="img-fluid"
                    style="max-height:500px;">

            </div>

        </div>

    </div>
</section>

<!-- ABOUT -->
<section id="about" class="py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-4">
            Tentang Saya
        </h2>

        <p class="mx-auto text-center"
           style="max-width:900px; line-height:2; font-size:18px;">

            Saya adalah mahasiswa semester 6 yang tertarik pada bidang web development.
            Saya mengikuti pelatihan ini untuk memperdalam kemampuan dalam pengembangan
            website sebagai bekal penelitian dan pengembangan proyek di masa depan.

        </p>

    </div>

</section>

<!-- KARYA -->
 <section id="karya" >
<div class="container text-center py-5">
  <h2 class="fw-bold">Karya Saya</h2>
  <p class="text-muted"> Dibawah ini kumpulan hasil karya yang mencakup desain antarmuka pengguna (UI/UX) dan perancangan website.  
    Setiap proyek dibuat dengan fokus pada tampilan yang menarik, pengalaman pengguna yang mudah dipahami, dan penerapan konsep desain modern.</p>
</div>

<!-- ================= UI/UX ================= -->
<section id="ui">
  <div class="container">
    <h3 class="section-title text-center mb-4">Desain UI/UX</h3>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('img/bungaku.jpg') }}" class="card-img-top" alt="UI 1">
          <div class="card-body">
            <span class="badge bg-primary">Figma</span>
            <h5 class="mt-2">UI Aplikasi BungaKu</h5>
            <p class="text-muted">Desain aplikasi pemesanan buket bunga (BungaKu), yaitu aplikasi penjualan buket bunga yang dirancang dengan tampilan feminin, modern, dan ramah pengguna.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset('img/foodfun UI.jpg') }}" class="card-img-top" alt="UI 2">
          <div class="card-body">
            <span class="badge bg-primary">Figma</span>
            <h5 class="mt-2">Lomba Desain UI Aplikasi FoodFun</h5>
            <p class="text-muted">Merancang desain aplikasi FoodFund menggunakan Figma, yaitu platform donasi makanan dengan desain interaktif yang berfokus pada dampak sosial dan kemudahan pengguna.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
           <img src="{{ asset('img/catering UI.jpg') }}" class="card-img-top" alt="UI 3">
          <div class="card-body">
            <span class="badge bg-primary">Figma</span>
            <h5 class="mt-2">Redesain UI Website Jasa Catering Aqiqah</h5>
            <p class="text-muted">Memperbaiki desain ui pada website jasa catering aqiqah untuk meningkatkan pemesanan dan menggunakan tools figma.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
 </section>

<!-- ================= WEBSITE ================= -->
<section id="web">
  <div class="container">
    <h3 class="section-title text-center mb-4">Website</h3>

    <div class="row g-4">

      <div class="col-md-6">
        <div class="card">
          <img src="{{ asset('img/penyewaan.jpeg') }}" class="card-img-top" alt="Web 1">
          <div class="card-body">
            <span class="badge bg-warning text-dark">Web</span>
            <h5 class="mt-2">Website Penyewaan Alat Pertanian & Perkebunan</h5>
            <p class="text-muted">Website penyewaan alat pertanian menggunakan HTML, CSS, dan PHP dengan bantuan XAMPP sebagai server lokal dan Visual Studio Code sebagai editor.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
         <img src="{{ asset('img/web catering.jpg') }}" class="card-img-top" alt="Web 2">
          <div class="card-body">
            <span class="badge bg-warning text-dark">Web</span>
            <h5 class="mt-2">Redesain Website Jasa Catering Aqiqah</h5>
            <p class="text-muted">Memperbaiki website jasa catering aqiqah agar lebih responsif dan menarik, serta sebagai proyek PKL.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- KONTAK -->
<section id="kontak" class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6 text-center">

                <img src="{{ asset('img/animasi.png') }}"
                    alt="Animasi"
                    class="img-fluid"
                    style="max-width:500px;">

            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">

                <h2 class="fw-bold mb-4">
                    Kontak Saya
                </h2>

                <p><strong>Tanggal Lahir :</strong> Kebumen, 16 April 2005</p>
                <p><strong>Email :</strong> deviiiapril16@gmail.com</p>
                <p><strong>No. HP :</strong> 083863907997</p>
                <p><strong>Alamat :</strong> Desa Karangsari, Kecamatan Buayan, Kabupaten Kebumen</p>

            </div>

        </div>

    </div>

</section>

<!-- HUBUNGI -->
<section id="hubungi" class="py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5">
            Hubungi Saya
        </h2>

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card shadow">

                    <div class="card-body p-4">

                        <form action="/simpan-pesan" method="POST">

                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Subjek</label>
                                <input type="text" class="form-control" name="subjek" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Pesan</label>
                                <textarea class="form-control"
                                    rows="5"
                                    name="pesan"
                                    required></textarea>
                            </div>

                            <div class="text-center">

                                <button type="submit"
                                        class="btn px-4 py-2"
                                        style="background:#EC4899;color:white;border-radius:30px;">
                                    Kirim Pesan
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection