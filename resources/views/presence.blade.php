<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RFID Presence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" rel="stylesheet">
</head>
<body>
<x-navbar>
    <img src="/image/Label/RFID-Label.png" alt="SMART HOME Starter Kit" class="img-fluid position-absolute top-10 end-0" style="height: 50px; margin-right: 10px;">
</x-navbar>

<div class="container-fluid mt-4 pt-5 px-0"> 
    <div class="container-fluid pt-5 px-0"> 
        <div class="position-relative bg-dark text-white p-3 text-center">
            <a href="/produkRFID" class="btn btn-light position-absolute start-0" style="top: 13px; margin-left: 10px;">Kembali</a>
            <h4 class="m-0">RFID Presence - DEMO PRODUK</h4>
        </div>
    </div>

    <div class="container mt-4">
        <!-- Header dengan Tombol Download sejajar -->
        <div class="row justify-content-center my-4">
            <div class="col-12 col-md-10">
                <h4>Data Presence - RFID Presence</h4>
            </div>
            <div class="col-12 col-md-auto">
                <button class="btn btn-success text-white">Unduh File Excel</button>
            </div>
        </div>

        <!-- Tabel -->
        <table id="example" class="display text-center" style="width:100%">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>UID</th>
                    <th>Nama Lengkap</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2345771DD</td>
                    <td>Nurjaman</td>
                    <td>07:00 WIB</td>
                    <td>12:00 WIB</td>
                    <td>OUT</td>
                    <td>PT AKTARA</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2345771DD</td>
                    <td>Nurjaman</td>
                    <td>07:00 WIB</td>
                    <td></td>
                    <td>IN</td>
                    <td>PT AKTARA</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2345771DD</td>
                    <td>Nurjaman</td>
                    <td>07:00 WIB</td>
                    <td>12:00 WIB</td>
                    <td>Out</td>
                    <td>PT AKTARA</td>
                </tr>
            </tbody>
        </table>
    </div>
    <x-footer></x-footer>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>
</html>
