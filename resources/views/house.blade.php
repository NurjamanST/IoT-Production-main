<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <img src="/image/Label/SmartHome-Label.png" alt="SMART HOME Starter Kit" class="img-fluid position-absolute top-10 end-0" style="height: 50px; margin-right: 10px;">
    </x-navbar>

    <div class="container-fluid mt-4 pt-5 px-0"> 
        <div class="position-relative bg-dark text-white p-3 text-center">
            <a href="/" class="btn btn-light position-absolute start-0" style="top: 13px; margin-left: 10px;">Kembali</a>
            <h4 class="m-0">SMART HOME - DEMO PRODUK</h4>
        </div>
    </div>



        <div class="row mt-4 text-center justify-content-center">
            <!-- Lampu 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="border p-3 rounded shadow">
                    <h5>Lampu 1</h5>
                    <img src="image/Icons/lampu.png" alt="Lampu" class="img-fluid">
                    <div class="mt-2">
                        <button class="btn btn-success w-100" onclick="toggleDevice(this, 'ON', 'OFF')">ON</button>
                    </div>
                </div>
            </div>

            <!-- Lampu 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="border p-3 rounded shadow">
                    <h5>Lampu 2</h5>
                    <img src="image/Icons/lampu.png" alt="Lampu" class="img-fluid">
                    <div class="mt-2">
                        <button class="btn btn-success w-100" onclick="toggleDevice(this, 'ON', 'OFF')">ON</button>
                    </div>
                </div>
            </div>

            <!-- Kipas -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="border p-3 rounded shadow">
                    <h5>Kipas</h5>
                    <img src="image/Icons/kipas.png" alt="Kipas" class="img-fluid">
                    <div class="mt-2">
                        <button class="btn btn-success w-100" onclick="toggleDevice(this, 'NYALA', 'MATI')">NYALA</button>
                    </div>
                </div>
            </div>

            <!-- Pagar Rumah 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="border p-3 rounded shadow">
                    <h5>Pagar Rumah</h5>
                    <img src="image/Icons/pager.png" alt="Pagar" class="img-fluid">
                    <div class="mt-2">
                        <button class="btn btn-success w-100" onclick="toggleDevice(this, 'BUKA', 'TUTUP')">BUKA</button>
                    </div>
                </div>
            </div>

            <!-- Pagar Rumah 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="border p-3 rounded shadow">
                    <h5>Kabel</h5>
                    <img src="image/Icons/kabel.png" alt="Pagar" class="img-fluid">
                    <div class="mt-2">
                        <button class="btn btn-success w-100" onclick="toggleDevice(this, 'NYALA', 'MATI')">NYALA</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sensor Ultrasonik -->
        <div class="mt-4 d-flex flex-column flex-md-row justify-content-between align-items-center bg-primary text-white p-3 full-width">
            <span class="fw-bold">SENSOR ULTRASONIK</span>
            <div class="bg-white text-dark px-3 py-2 rounded text-center">
                Sensor Ultrasonik digunakan untuk mengontrol Kipas Angin sesuai Jarak.
            </div>
            <span class="fw-bold">Status Jarak: <span class="text-warning">50 cm</span></span>
        </div>

    </div>
    
    <x-footer></x-footer>
    <script>
                
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
