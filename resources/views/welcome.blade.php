<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
   .divider-with-text {
    width: 100%;
    text-align: center;
    position: relative;
    border-top: 3px solid #0d2b57; /* Lebih tebal */
    }

    .divider-with-text span {
    position: relative;
    top: 13px; /* Sesuaikan supaya pas dengan padding */
    background: #fff; /* Latar belakang garis */
    padding: 18px 40px; /* Padding lebih besar */
    color: white;
    background-color: #0d2b57; /* Warna kotak teks */
    font-weight: bold;
    font-size: 15px; /* Font lebih besar */
    letter-spacing: 1px; /* Spasi antar huruf */
    text-transform: uppercase; /* Kapital semua */
    }
    .divider-text {
  width: 100%;
  position: relative;
  border-top: 3px solid #0d2b57; /* Garis tebal */
}

.divider-text span {
  position: absolute;
  top: -1px; /* Sesuaikan supaya pas dengan padding */
    background: #fff; /* Latar belakang garis */
    padding: 18px 40px; /* Padding lebih besar */
    color: white;
    background-color: #0d2b57; /* Warna kotak teks */
    font-weight: bold;
    font-size: 15px; /* Font lebih besar */
    letter-spacing: 1px; /* Spasi antar huruf */
    text-transform: uppercase; /* Kapital semua */
}
.img-circle {
      width: 300px; /* Ukuran gambar */
      height: 300px;
      object-fit: cover; /* Crop gambar sesuai ukuran */
      border-radius: 50%; /* Bikin bulat */
      border: 5px solid #0d2b57; /* Border lingkaran */
    }
/* Panah ke kanan (default) */
.accordion-button::after {
    content: "";
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chevron-right' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M6.854 4.646a.5.5 0 0 1 0 .708L9.207 8l-2.353 2.646a.5.5 0 0 1-.708-.708l2-2.25-2-2.25a.5.5 0 0 1 .708-.708z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-size: 1rem;
    width: 1rem;
    height: 1rem;
    transition: transform 0.3s ease;
    margin-left: auto;
}

/* Saat accordion dibuka, rotasi ke bawah */
.accordion-button:not(.collapsed)::after {
    transform: rotate(90deg);
}

/* Styling tambahan untuk tampilan */
.accordion-button {
    background-color: transparent;
    box-shadow: none;
    font-weight: 500;
    color: #0d2b57; /* Sesuaikan warna teks */
}

.accordion-item {
    border-bottom: 1px solid #0d2b57; /* Garis bawah */
    border: none;
}

.accordion-body {
    font-size: 14px;
    padding: 15px;
}
html {
  scroll-padding-top: 76px; /* Sesuaikan 100px dengan tinggi navbar */
}
.carousel-indicators [data-bs-target] {
  width: 12px;
  height: 12px;
  border-radius: 50%; /* Membuat bulat */
  background-color: rgba(255, 255, 255, 0.5); /* Warna default */
  border: none; /* Menghilangkan border */
  margin: 0 5px;
  transition: background-color 0.3s ease;
}

.carousel-indicators .active {
  background-color: #ffffff; /* Warna ketika aktif */
  width: 14px;
  height: 14px;
}

    </style>
</head>
<body>
  <x-navbar>
    <ul class="navbar-nav fw-bold ms-auto">
      <li class="nav-item"><a class="nav-link" href="#home">HOME</a></li>
      <li class="nav-item"><a class="nav-link" href="#produk">PRODUK</a></li>
      <li class="nav-item"><a class="nav-link" href="#mitra">MITRA</a></li>
      <li class="nav-item"><a class="nav-link" href="#tentang">ABOUT US</a></li>
      <li class="nav-item"><a class="nav-link" href="#faq">FAQ's</a></li>
      </ul>
  </x-navbar>
  <x-wa></x-wa>
  <section id="home">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{('image/Banner/1.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{url('image/Banner/2.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{url('image/Banner/3.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{url('image/Banner/4.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{url('image/Banner/5.png')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
  </section>

  <section id="produk">
      <div class="container-fluid m-0 p-0">
        <!-- Header -->
        <div class="d-flex align-items-center mb-2" style="width: 100%; gap: 12px;">
          <!-- Header kotak (30%) -->
          <div class="text-white p-2 px-5 fw-bold" 
            style="background-color: #0d2b57; flex: 0 0 48%;">
            PRODUK IoT-PRO AKTARA ACADEMY
          </div>
          <!-- Spacer (sisa space 70%) -->
          <div style="flex: 0 0 52%;"></div>
        </div>

        <!-- Content -->
        <div class="container-fluid">
          <!-- CARD 1 -->
          <div class="d-flex align-items-center mb-4" style="width: 100%; gap: 12px; height: 180px;">
            <!-- Picture (10%) -->
            <div style="flex: 0 0 17%; height: 100%;">
              <div class="position-relative w-100 h-100">
                <img src="{{ url('image/Produk/home2.jpg') }}" class="img-fluid rounded border w-100 h-100 object-fit-cover" alt="Thumbnail Foto">
                <div class="position-absolute top-50 start-50 translate-middle text-center fw-bold text-black" style="width: 100%; font-size: 10px;">
                  Thumbnail Products <br> (Picture)
                </div>
              </div>
            </div>

            <!-- Video (20%) -->
            <div style="flex: 0 0 30%; height: 100%;">
              <div class="position-relative w-100 h-100">
                <img src="{{ url('image/Produk/home3.jpg') }}" class="img-fluid rounded border w-100 h-100 object-fit-cover" alt="Thumbnail Video">
                <div class="position-absolute top-50 start-50 translate-middle text-center fw-bold text-black" style="width: 100%; font-size: 10px;">
                  Thumbnail Products <br> (Video)
                </div>
              </div>
            </div>

            <!-- Deskripsi (70%) -->
            <div style="flex: 0 0 49%; height: 100%;" class="d-flex flex-column justify-content-between">
              <div>
                <h6 class="fw-bold mb-2">Smart Home (Alat Peraga & Stater Kit)</h6>
                <p class="text-muted" style="font-size: 13px;">
                  Smart Home System adalah solusi lengkap untuk mengontrol dan memonitor rumah Anda secara otomatis dan real-time melalui smartphone. Dengan perangkat ini, Anda dapat mengatur pencahayaan, suhu ruangan, keamanan, dan perangkat elektronik lainnya dari mana saja. Dilengkapi dengan sensor pintar, kamera CCTV, dan integrasi suara (voice control), sistem ini memberikan kenyamanan, keamanan, dan efisiensi energi bagi rumah modern. Cocok untuk keluarga yang menginginkan gaya hidup cerdas dan terhubung.
                </p>
              </div>
              <div class="d-flex justify-content-between gap-2">
                <a href="#" class="btn btn-primary btn-sm rounded">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                <a href="{{ ('house') }}" class="btn btn-sm rounded" style="background-color: #0d2b57; color: white;">Demo Web <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      
      <div class="container-fluid">
          <!-- CARD 1 -->
          <div class="d-flex align-items-center mb-4" style="width: 100%; gap: 12px; height: 180px;">
            <!-- Picture (10%) -->
            <div style="flex: 0 0 17%; height: 100%;">
              <div class="position-relative w-100 h-100">
                <img src="{{ url('image/Produk/farm.jpg') }}" class="img-fluid rounded border w-100 h-100 object-fit-cover" alt="Thumbnail Foto">
                <div class="position-absolute top-50 start-50 translate-middle text-center fw-bold text-black" style="width: 100%; font-size: 10px;">
                  Thumbnail Products <br> (Picture)
                </div>
              </div>
            </div>

            <!-- Video (20%) -->
            <div style="flex: 0 0 30%; height: 100%;">
              <div class="position-relative w-100 h-100">
                <img src="{{ url('image/Produk/farm2.jpg') }}" class="img-fluid rounded border w-100 h-100 object-fit-cover" alt="Thumbnail Video">
                <div class="position-absolute top-50 start-50 translate-middle text-center fw-bold text-black" style="width: 100%; font-size: 10px;">
                  Thumbnail Products <br> (Video)
                </div>
              </div>
            </div>

            <!-- Deskripsi (70%) -->
            <div style="flex: 0 0 49%; height: 100%;" class="d-flex flex-column justify-content-between">
              <div>
                <h6 class="fw-bold mb-2">Smart Farm (Alat Peraga & Stater Kit)</h6>
                <p class="text-muted" style="font-size: 13px;">
                  Smart Farm Monitoring System adalah alat IoT yang dirancang untuk memaksimalkan produktivitas pertanian dengan memantau kondisi lahan secara real-time. Sistem ini dilengkapi dengan sensor untuk mengukur kelembaban tanah, suhu, kelembaban udara, dan intensitas cahaya. Data yang dikumpulkan dapat diakses melalui aplikasi mobile, memungkinkan petani untuk mengambil keputusan tepat waktu seperti mengatur irigasi otomatis atau memberikan pupuk. Dengan teknologi ini, pertanian menjadi lebih efisien, hemat sumber daya, dan berkelanjutan.
                </p>
              </div>
              <div class="d-flex justify-content-between gap-2">
                <a href="#" class="btn btn-primary btn-sm rounded">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                <a href="/farm" class="btn btn-sm rounded" style="background-color: #0d2b57; color: white;">Demo Web <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
      </div>
      
      <div class="container-fluid">
          <!-- CARD 1 -->
          <div class="d-flex align-items-center mb-4" style="width: 100%; gap: 12px; height: 180px;">
            <!-- Picture (10%) -->
            <div style="flex: 0 0 17%; height: 100%;">
              <div class="position-relative w-100 h-100">
                <img src="{{ url('image/Produk/presence.jpg') }}" class="img-fluid rounded border w-100 h-100 object-fit-cover" alt="Thumbnail Foto">
                <div class="position-absolute top-50 start-50 translate-middle text-center fw-bold text-black" style="width: 100%; font-size: 10px;">
                  Thumbnail Products <br> (Picture)
                </div>
              </div>
            </div>

            <!-- Video (20%) -->
            <div style="flex: 0 0 30%; height: 100%;">
              <div class="position-relative w-100 h-100">
                <img src="{{ url('image/Produk/presence2.jpg') }}" class="img-fluid rounded border w-100 h-100 object-fit-cover" alt="Thumbnail Video">
                <div class="position-absolute top-50 start-50 translate-middle text-center fw-bold text-black" style="width: 100%; font-size: 10px;">
                  Thumbnail Products <br> (Video)
                </div>
              </div>
            </div>

            <!-- Deskripsi (70%) -->
            <div style="flex: 0 0 49%; height: 100%;" class="d-flex flex-column justify-content-between">
              <div>
                <h6 class="fw-bold mb-2">Preference REFID (Alat Peraga & Stater Kit)</h6>
                <p class="text-muted" style="font-size: 13px;">
                  Presence RFID System adalah solusi cerdas untuk manajemen kehadiran dan akses kontrol berbasis teknologi RFID. Sistem ini memungkinkan pelacakan kehadiran karyawan, siswa, atau tamu secara akurat dan otomatis. Dengan kartu atau tag RFID, pengguna dapat mengakses area tertentu yang telah ditentukan, sementara data kehadiran tersimpan secara real-time di cloud untuk analisis lebih lanjut. Ideal untuk kantor, sekolah, atau gedung perkantoran yang membutuhkan sistem kehadiran yang efisien dan terintegrasi.
                </p>
              </div>
              <div class="d-flex justify-content-between gap-2">
                <a href="#" class="btn btn-primary btn-sm rounded">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                <a href="/produkRFID" class="btn btn-sm rounded" style="background-color: #0d2b57; color: white;">Demo Web <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
      </div>
  </section>

  <section id="mitra">
    <div class="divider-with-text my-4">
      <span>MITRA KAMI</span>
        <div class="container-fluid py-4 my-5">
            <div class="d-flex justify-content-center flex-wrap gap-4">
                <img src="{{ url('image/Logo/logo.png') }}" alt="Logo Mitra" class="logo-mitra" style="width: 90px; height: 90px;">
                <img src="{{ url('image/Logo/logo.png') }}" alt="Logo Mitra" class="logo-mitra" style="width: 90px; height: 90px;">
                <img src="{{ url('image/Logo/logo.png') }}" alt="Logo Mitra" class="logo-mitra" style="width: 90px; height: 90px;">
                <img src="{{ url('image/Logo/logo.png') }}" alt="Logo Mitra" class="logo-mitra" style="width: 90px; height: 90px;">
                <img src="{{ url('image/Logo/logo.png') }}" alt="Logo Mitra" class="logo-mitra" style="width: 90px; height: 90px;">
                <img src="{{ url('image/Logo/logo.png') }}" alt="Logo Mitra" class="logo-mitra" style="width: 90px; height: 90px;">
                <img src="{{ url('image/Logo/logo.png') }}" alt="Logo Mitra" class="logo-mitra" style="width: 90px; height: 90px;">
                <img src="{{ url('image/Logo/logo.png') }}" alt="Logo Mitra" class="logo-mitra" style="width: 90px; height: 90px;">
                <img src="{{ url('image/Logo/logo.png') }}" alt="Logo Mitra" class="logo-mitra" style="width: 90px; height: 90px;">
                <img src="{{ url('image/Logo/logo.png') }}" alt="Logo Mitra" class="logo-mitra" style="width: 90px; height: 90px;">
                <img src="{{ url('image/Logo/logo.png') }}" alt="Logo Mitra" class="logo-mitra" style="width: 90px; height: 90px;">
                <img src="{{ url('image/Logo/logo.png') }}" alt="Logo Mitra" class="logo-mitra" style="width: 90px; height: 90px;">
            </div>
        </div>
    </div>
  </section>

  <section id="tentang">
    <div class="divider-text my-4">
      <span>TENTANG KAMI</span>
    </div>
    <div class="container py-5" >
      <div class="row align-items-center g-5">
        <!-- Bagian Teks -->
        <div class="col-lg-8">
          <h4 class="fw-bold text-uppercase mb-3">Tentang IoT Productions PT AKTARA ACADEMY</h4>
          <p class="text-justify lh-lg">
            IoT Productions by PT Aktara Academy merujuk pada divisi atau unit khusus di bawah PT Aktara Academy yang berfokus pada pengembangan, produksi, dan implementasi solusi berbasis Internet of Things (IoT). IoT adalah teknologi yang memungkinkan perangkat fisik terhubung ke internet dan saling berkomunikasi, sehingga dapat mengumpulkan, mengirim, dan menganalisis data secara real-time. Dengan teknologi ini, perangkat dapat diotomatisasi, dikendalikan jarak jauh, dan diintegrasikan dengan sistem lain untuk meningkatkan efisiensi, kenyamanan, dan keamanan. IoT Productions menyediakan berbagai produk dan layanan IoT yang dapat diaplikasikan di berbagai sektor, seperti smart home, smart city, smart presence RFID, dll. 
          </p>
        </div>
        <!-- Bagian Gambar -->
        <div class="col-lg-4 text-center">
          <img src="{{ url('image/Logo/logo.png') }}" alt="Logo IoT Productions" class="img-fluid img-circle mx-auto d-block">
        </div>
      </div>
    </div>
  </section>

  <section id="faq">
    <!-- FAQ Section -->
    <h5 class="fw-bold text-center py-3 text-white m-0" style="background-color: #0d2b57;">
        FREQUENTLY ASKED QUESTIONS
    </h5>
    <div class="container-fluid my-2">
        <div class="accordion" id="faqAccordion">

            <!-- FAQ Item 1 -->
            <div class="accordion-item border-0 border-bottom">
                <h2 class="accordion-header" id="faqHeading1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1">
                        Apa itu IoT-Pro Aktara ?
                    </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        IoT Productions by PT Aktara Academy merujuk pada divisi atau unit khusus di bawah PT AKTARA yang berfokus pada pengembangan, produksi, dan implementasi solusi berbasis Internet of Things (IoT).
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="accordion-item border-0 border-bottom">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2">
                        Produk apa saja yang disediakan IoT-Pro Aktara?
                    </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Kami memiliki beberapa produk yaitu:
                      {{-- list produk: --}}
                      <ul>
                        <li>Alat Peraga (Smart Home, Smart Farm, Presence RFID)</li>
                        <li>Starter Kit (Smart Home, Smart Farm, Presence RFID)</li>
                        <li>IoT Learning Kit (Media Belajar IoT Basic)</li>
                        <li>Dan beberapa teknologi lainnya</li>
                      </ul>                
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="accordion-item border-0 border-bottom">
                <h2 class="accordion-header" id="faqHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3">
                        Apakah ada pricelist semua produk IoT-Pro Aktara?
                    </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Pricelist dapat menghubungi kami lebih lanjut karena harga device berfluktuatif dan menyesuaikan kebutuhan customer.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="accordion-item border-0 border-bottom">
                <h2 class="accordion-header" id="faqHeading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4">
                        Selain biaya produk, apakah ada biaya lain, jika ingin pengadaan alat dari IoT-Pro Aktara?
                    </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Terdapat biaya manage service yang dibayarkan setiap tahun dan biaya onsite service untuk biaya instalasi (akomodasi, perjalanan, dsb).
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="accordion-item border-0 border-bottom">
                <h2 class="accordion-header" id="faqHeading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5">
                        Apakah ada perawatan yang harus dilakukan ketika sudah memiliki produk dari IoT-Pro Aktara?
                    </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Perawatan yang perlu dilakukan yaitu dengan membersihkan sensor dari debu dan kotoran setidaknya satu tahun sekali. Selain itu, pada beberapa jenis sensor juga perlu dikalibrasi kembali agar hasil pembacaan tetap akurat.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="accordion-item border-0 border-bottom">
                <h2 class="accordion-header" id="faqHeading6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6">
                        Apakah produk IoT-Pro Aktara harus dipasang oleh Tim dari IoT-Pro Aktara?
                    </button>
                </h2>
                <div id="faqCollapse6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Instalasi bersifat opsional, artinya bisa dipasang oleh Tim IoT-Pro Aktara maupun dipasang sendiri. Jika ingin dipasang sendiri nantinya akan difasilitasi video instalasi dari IoT-Pro Aktara.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="accordion-item border-0 border-bottom">
                <h2 class="accordion-header" id="faqHeading7">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7">
                        Apakah produk dari ioT-Pro Aktara bergaransi?
                    </button>
                </h2>
                <div id="faqCollapse7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Produk IoT-Pro Aktara memiliki garansi 6 bulan.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div class="accordion-item border-0 border-bottom">
                <h2 class="accordion-header" id="faqHeading8">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8">
                        Berapa lama waktu yang dibutuhkan untuk produk dapat diterima?
                    </button>
                </h2>
                <div id="faqCollapse8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Apabila seluruh komponen produk tersedia, produk dapat dikirimkan setelah 2 - 3 minggu masa produksi.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 9 -->
            <div class="accordion-item border-0 border-bottom">
                <h2 class="accordion-header" id="faqHeading9">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9">
                        Kontak yang bisa dibuhungi?
                    </button>
                </h2>
                <div id="faqCollapse9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Silahkan hubungi nomor whatsapp berikut : +62 813-1226-1335 (IoT-Pro Aktara Team)
                    </div>
                </div>
            </div>

        </div>
    </div>
  </section>

  <div class="text-white text-center py-2" style="background-color: #0d2b57; margin-top: 10px;">
      <h5 class="m-0 fw-bold">DAPATKAN SISTEM DUKUNGAN ANDA YANG LEBIH BAIK</h5>
    </div>

    <!-- Bagian Gambar -->
    <div class="container-fluid p-0">
      <img src="{{ ('image/tim.png') }}" alt="Team Image" class="img-fluid w-100">
  </div>

<x-footer></x-footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
</script>
</body>
</html>