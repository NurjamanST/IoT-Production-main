<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFID Presence - Demo Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .info-card {
            border-radius: 10px;
            padding: 20px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        .circle-icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 50px;
            margin: 0 auto;
        }
        .clickable-card {
            cursor: pointer;
            transition: 0.3s;
        }
        .clickable-card:hover {
            transform: scale(1.05);
        }
        html {
            scroll-padding-top: 180px;
        }
        body {
            padding-top: 30px;
        }
    </style>
</head>
<body>
    <x-navbar>
        <img src="/image/Label/RFID-Label.png" alt="SMART HOME Starter Kit" class="img-fluid position-absolute top-10 end-0" style="height: 50px; margin-right: 10px;">
    </x-navbar>
    
    <div class="container-fluid pt-5 px-0"> 
        <div class="position-relative bg-dark text-white p-3 text-center">
            <a href="/" class="btn btn-light position-absolute start-0" style="top: 13px; margin-left: 10px;">Kembali</a>
            <h4 class="m-0">RFID Presence - DEMO PRODUK</h4>
        </div>
    </div>

    <div class="container-fluid py-5">
        {{-- secton for the Live RFID presence --}}
        <div class="row text-center mb-4 align-items-center">
            <div class="col-md-3 mb-3">
                <img src="image/Icons/detect.png" alt="Tap Card" id="tap-card-btn" style="cursor: pointer;">
                <p class="fw-bold mt-2">TEMPELKAN KARTU UNTUK<br>MELAKUKAN ABSENSI</p>
            </div>
            <div class="col-md-3 mb-3">
                <img src="image/Icons/rfid.png" alt="RFID">
            </div>
            <div class="col-md-3 mb-3" id="success-message" style="display: ;">
                <img src="image/Icons/ya.png" alt="Check">
                <p class="fw-bold mt-2">SELAMAT DATANG</p>
            </div>
            <div class="col-md-3 mb-3" id="error-message" style="display: ;">
                <img src="image/Icons/no.png" alt="Check">
                <p class="fw-bold mt-2">KARTU INVALID</p>
            </div>
        </div>

        <hr class="border-3 border-dark my-5" weight="100%">

        {{-- section for the RFID presence Menu --}}
        <div class="container-fluid my-4 px-5">
            <div class="d-flex justify-content-between align-items-stretch gap-5">
                {{-- Invalid Card --}}
                <a href="/invalid" class="text-decoration-none text-white">
                    <div class="card text-white bg-danger shadow rounded-3 flex-grow-1" style="min-width: 300px; height: 200px;">
                        <div class="card-body d-flex flex-column justify-content-between position-relative h-100">
                            <div>
                                <h3 class="fw-bold m-0">6</h3>
                                <h3 class="m-0">INVALID CARD</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-8 d-flex justify-content-left align-items-end">
                                    <span class="text-white text-decoration-none fw-bold">Detail &rarr;</span>
                                </div>
                                <div class="col-md-auto" style="font-size: 50px; opacity: 0.5;">&#10006;</div>
                            </div>
                        </div>
                    </div>
                </a>
                {{-- SDM Card --}}
                <a href="/sdm" class="text-decoration-none text-white">
                    <div class="card text-white bg-success shadow rounded-3 flex-grow-1" style="min-width: 300px; height: 200px;">
                        <div class="card-body d-flex flex-column justify-content-between position-relative h-100">
                            <div>
                                <h3 class="fw-bold m-0">6</h3>
                                <h3 class="m-0">Sumber Daya Manusia</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-8 d-flex justify-content-left align-items-end">
                                    <span class="text-white text-decoration-none fw-bold">Detail &rarr;</span>
                                </div>
                                <div class="col-md-auto" style="font-size: 50px; opacity: 0.5;">&#128100;</div>
                            </div>
                        </div>
                    </div>
                </a>
                {{-- Presence Card --}}
                <a href="/presence" class="text-decoration-none text-white">
                    <div class="card text-white bg-primary shadow rounded-3 flex-grow-1" style="min-width: 300px; height: 200px;">
                        <div class="card-body d-flex flex-column justify-content-between position-relative h-100">
                            <div>
                                <h3 class="fw-bold m-0">10</h3>
                                <h3 class="m-0">PRESENCE</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-8 d-flex justify-content-left align-items-end">
                                    <span class="text-white text-decoration-none fw-bold">Detail &rarr;</span>
                                </div>
                                <div class="col-md-auto" style="font-size: 50px; opacity: 0.5;">&#128421;</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Keterangan Sistem -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center bg-primary text-white p-3 full-width">
        <div class="col-12 col-md-auto mx-2">
            <span class="fw-bold">KETERANGAN SISTEM</span>
        </div>
        <div class="col-12 col-md-10 bg-white text-dark px-3 py-2 rounded text-left">
            Sistem ini menggunakan Modul RFID Reader, untuk mendeteksi UID Kartu Presence. Jika Kartu belum terdaftar pada database Sumber Daya Manusia (SDM) akan muncul keterangan “KARTU INVALID” dan secara otomatis data UID Kartu akan disimpan ke database INVALID CARD untuk nantinya di daftarkan ke database Sumber Daya Manusia (SDM). Setelah Kartu terdaftar ketika di tap kembali akan muncul keterangan “Selamat Datang” yang menandakan proses presence berhasil dan data tersimpan di database PRESENCE.
        </div>
    </div>
    <x-footer></x-footer>

    <script>
        document.getElementById('tap-card-btn').addEventListener('click', function () {
            const isValid = Math.random() >= 0.5;
            document.getElementById('success-message').style.display = 'none';
            document.getElementById('error-message').style.display = 'none';
            if (isValid) {
                document.getElementById('success-message').style.display = 'block';
            } else {
                document.getElementById('error-message').style.display = 'block';
            }
            setTimeout(() => {
                document.getElementById('success-message').style.display = 'none';
                document.getElementById('error-message').style.display = 'none';
            }, 5000);
        });
    </script>
</body>
</html>
