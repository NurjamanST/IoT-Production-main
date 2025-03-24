<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        html { scroll-padding-top: 58px; }
        html, body { overflow-x: hidden; }
    </style>
</head>
<body>
    <x-navbar>
        <img src="{{ ('image/Label/smarthomelabel.png') }}" alt="SMART HOME Starter Kit" class="img-fluid position-absolute top-10 end-0" style="height: 50px; margin-right: 10px;">
    </x-navbar>

    <div class="container-fluid mt-4 pt-5 px-0"> 
        <div class="position-relative bg-dark text-white p-3 text-center">
            <a href="{{ ('/') }}" class="btn btn-light position-absolute start-0" style="top: 13px; margin-left: 10px;">Kembali</a>
            <h4 class="m-0">SMART HOME - DEMO PRODUK</h4>
        </div>
    </div>

    <div class="row mt-4 text-center justify-content-center">
        <!-- Perangkat akan ditampilkan oleh JavaScript -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="border p-3 rounded shadow">
                <h5>Lampu 1</h5>
                <img src="{{ ('image/Icons/lampu.png') }}" alt="Lampu" class="img-fluid">
                <div class="mt-2">
                    <button id="relay1" class="btn w-100">Loading...</button>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="border p-3 rounded shadow">
                <h5>Lampu 2</h5>
                <img src="{{ ('image/Icons/lampu.png') }}" alt="Lampu" class="img-fluid">
                <div class="mt-2">
                    <button id="relay2" class="btn w-100">Loading...</button>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="border p-3 rounded shadow">
                <h5>Kipas</h5>
                <img src="{{ ('image/Icons/kipas.png') }}" alt="Kipas" class="img-fluid">
                <div class="mt-2">
                    <button id="relay3" class="btn w-100">Loading...</button>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="border p-3 rounded shadow">
                <h5>Kabel</h5>
                <img src="{{ ('image/Icons/kabel.png') }}" alt="Kabel" class="img-fluid">
                <div class="mt-2">
                    <button id="relay4" class="btn w-100">Loading...</button>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const apiUrl = "{{ ('/api/smarthome') }}";
            console.log(apiUrl);
            

            /**
             * Mengambil status relay dari API dan memperbarui UI.
             */
            function fetchStatus() {
                fetch(apiUrl)
                    .then(response => response.json())
                    .then(responseData => {
                        if (responseData.status === "success" && responseData.data.length > 0) {
                            updateUI(responseData.data[0]);
                        } else {
                            console.error("Data API tidak valid:", responseData);
                        }
                    })
                    .catch(error => console.error("Gagal mengambil data:", error));
            }

            /**
             * Memperbarui tampilan tombol berdasarkan status relay.
             * 
             * @param {Object} data - Objek yang berisi status relay dari API.
             */
            function updateUI(data) {
                for (let i = 1; i <= 4; i++) {
                    const button = document.getElementById(`relay${i}`);
                    if (button) {
                        const status = data[`relay${i}`];
                        button.textContent = status ? "ON" : "OFF";
                        button.classList.toggle("btn-success", status === 1);
                        button.classList.toggle("btn-danger", status === 0);
                        button.onclick = () => toggleDevice(i, status);
                    }
                }
            }

            /**
             * Mengubah status relay dengan mengirim request ke API.
             * 
             * @param {number} relayId - ID relay yang akan diubah.
             * @param {number} currentState - Status saat ini (1 = ON, 0 = OFF).
             */
            function toggleDevice(relayId, currentState) {
                const newState = currentState === 1 ? 0 : 1;
                fetch(`${apiUrl}/update/${relayId}`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector("meta[name='csrf-token']").getAttribute("content")
                    },
                    body: JSON.stringify({ [`relay${relayId}`]: newState })
                })
                .then(response => response.json())
                .then(() => fetchStatus()) // Refresh UI setelah update
                .catch(error => console.error("Gagal memperbarui relay:", error));
            }

            // Ambil status perangkat saat halaman dimuat.
            fetchStatus();
        });
    </script>
</body>
</html>
