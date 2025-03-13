<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Farm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        html {
            scroll-padding-top: 58px; /* Sesuaikan 100px dengan tinggi navbar */
        }
        html, body {
            overflow-x: hidden;
        }

    </style>
</head>

<body>
    
    <x-navbar>
        <img src="/image/Label/SmartFarm-Label.png" alt="SMART HOME Starter Kit" class="img-fluid position-absolute top-10 end-0" style="height: 50px; margin-right: 10px;">
    </x-navbar>
    {{-- section for Title Page --}}
    <div class="container-fluid mt-4 pt-5 px-0"> 
        <div class="position-relative bg-dark text-white p-3 text-center">
            <a href="/" class="btn btn-light position-absolute start-0" style="top: 13px; margin-left: 10px;">Kembali</a>
            <h4 class="m-0">SMART FARM - DEMO PRODUK</h4>
        </div>
    </div>


    {{-- Section for the farm page --}}
    <div class="row mt-4 text-center justify-content-center">
        <!-- Update at for Kelembaban -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 mx-5">
            <div class="border p-3 rounded shadow">
                <div class="">
                    <h5>07:00 WIB Selasa 12/03/2025</h5>
                </div>
                <div class="">
                    <img src="image/Icons/kalender.png" alt="calender" class="img-fluid">
                </div>
                <div class="mt-4">
                    {{-- <button class="btn btn-success w-100" onclick="toggleDevice(this, 'ON', 'OFF')">ON</button> --}}
                </div>
            </div>
        </div>

        <!-- Kelembaban -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 mx-5">
            <div class="border p-3 rounded shadow">
                <h5>KELEMBABAN</h5>
                <img src="image/Icons/ph.png" alt="ph" class="img-fluid">
                <div class="mt-2">
                    <button class="btn btn-primary w-100" >80 %</button>
                </div>
            </div>
        </div>

        <!-- Kondisi POMPA -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 mx-5">
            <div class="border p-3 rounded shadow">
                <h5>KONDISI POMPA</h5>
                <img src="image/Icons/pompa.png" alt="Kipas" class="img-fluid">
                <div class="mt-2">
                    <button class="btn btn-success w-100" onclick="toggleDevice(this, 'NYALA', 'MATI')">NYALA</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Terakhir Pompa nyala --}}
    <div class="container text-left my-3 p-3">
        <div class="row">
          <div class="col-6 col-md-8 px-3 d-flex align-items-center">
            <h5>Terakhir Menyala Pada : 07:01 WIB Selasa 12/03/2025</h5>
          </div>
          <div class="col-6 col-md-4 px-3">
            <button class="btn btn-success text-white px-3 rounded">KLIK UNTUK SIRAM SEKARANG</button>
          </div>
        </div>
    </div>

    <!-- Keterangan Sistem -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center bg-primary text-white p-3 full-width">
        <div class="col-12 col-md-auto mx-2">
            <span class="fw-bold">KETERANGAN SISTEM</span>
        </div>
        <div class="col-12 col-md-8 bg-white text-dark px-3 py-2 rounded text-left">
            Sistem ini menggunakan sensor SOIL MOISTURE , untuk mendeteksi kadar kelembaban tanah.
            Jika kelembaban  tanah berada dibawah ambang batas, maka pompa Air akan otomatis menyala untuk menyiram tanaman.
        </div>
        <div class="col-12 col-md-auto mx-2">
            <span class="fw-bold">
                Status Kelembaban Tanah : <span class="text-warning">80 %</span><br>
                Status POMPA : <span class="text-warning">MATI</span>
            </span>
        </div>
    </div>

    {{-- Tabel Riwayat Data - Smart Farm --}}
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-12 col-md-10">
                <h4>Riwayat Data - SMART FARM</h4>
            </div>
            <div class="col-12 col-md-auto">
                <button class="btn btn-success text-white">Unduh File Excel</button>
            </div>
        </div>
        <div class="row justify-content-center my-4">
            <table id="example" class="display text-center" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Waktu</th>
                        <th>Kelembaban</th>
                        <th>Kondisi Pompa</th>
                        <th>Terkakhir Menyala</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>07:00 WIB Selasa, 12/03/2025</td>
                        <td>80 %</td>
                        <td>Mati</td>
                        <td>07:00 WIB Selasa, 12/03/2025</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>07:00 WIB Selasa, 12/03/2025</td>
                        <td>91 %</td>
                        <td>Mati</td>
                        <td>07:00 WIB Selasa, 12/03/2025</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>07:00 WIB Selasa, 12/03/2025</td>
                        <td>102 %</td>
                        <td>Mati</td>
                        <td>07:00 WIB Selasa, 12/03/2025</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>07:00 WIB Selasa, 12/03/2025</td>
                        <td>113 %</td>
                        <td>Mati</td>
                        <td>07:00 WIB Selasa, 12/03/2025</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <x-footer></x-footer>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
        function toggleDevice(button, textOn, textOff) {
            if (button.classList.contains("btn-success")) {
                button.classList.remove("btn-success");
                button.classList.add("btn-danger");
                button.innerText = textOff;
            } else {
                button.classList.remove("btn-danger");
                button.classList.add("btn-success");
                button.innerText = textOn;
            }
        }
    </script>
</body>
</html>
