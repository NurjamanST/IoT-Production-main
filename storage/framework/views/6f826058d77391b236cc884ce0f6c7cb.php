<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran SDM - RFID Presence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        /* Menambah jarak antara konten utama dan footer */
        .content-wrapper {
            min-height: 75vh;
        }

        /* Efek input error */
        .input-error {
            border: 2px solid red !important;
            background-color: #ffcccc !important;
        }
    </style>
</head>
<body>
    <?php if (isset($component)) { $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e = $attributes; } ?>
<?php $component = App\View\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Navbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <img src="/image/Label/rfidlabel.png" alt="SMART HOME Starter Kit" class="img-fluid position-absolute top-10 end-0" style="height: 50px; margin-right: 10px;">
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $attributes = $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $component = $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
    
    <div class="container-fluid mt-4 pt-5 px-0"> 
        <div class="position-relative bg-dark text-white p-3 text-center">
            <a href="/invalid" class="btn btn-light position-absolute start-0" style="top: 13px; margin-left: 10px;">Kembali</a>
            <h4 class="m-0">RFID Presence - DEMO PRODUK</h4>
        </div>
    </div>


    <div class="container mt-5 content-wrapper">
        <h3 class="text-center fw-bold mb-4">Pendaftaran Data SDM - RFID Presence</h3>

        <div class="mx-auto p-4 border rounded shadow-sm bg-white" style="max-width: 500px;">
            <form id="registrationForm">
                <!-- UID -->
                <div class="mb-3">
                    <label class="form-label fw-bold">UID</label>
                    <input type="text" class="form-control bg-light" value="2345771DD" disabled>
                </div>

                <!-- Nama Lengkap -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda">
                </div>

                <!-- Nomor Identitas -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Nomor Identitas</label>
                    <input type="text" class="form-control" id="identitas" placeholder="Masukkan Nomor Identitas Anda">
                </div>

                <!-- Jenis Kelamin -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Jenis Kelamin</label>
                    <div>
                        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki"> 
                        <label for="laki-laki" class="me-3">Laki - Laki</label>
                        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan"> 
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>

                <!-- Instansi -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Instansi</label>
                    <input type="text" class="form-control" id="instansi" placeholder="Masukkan Nama Instansi Anda">
                </div>

                <!-- Tombol Simpan -->
                <button type="submit" class="btn btn-success d-block w-100">
                    SIMPAN <i class="bi bi-check-circle"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Footer dengan Jarak -->
    <div class="mt-5">
        <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
    </div>

    <script>
        document.getElementById("registrationForm").addEventListener("submit", function(event) {
            let nama = document.getElementById("nama");
            let identitas = document.getElementById("identitas");
            let instansi = document.getElementById("instansi");
            let jenisKelamin = document.querySelector('input[name="jenis_kelamin"]:checked');

            let fields = [nama, identitas, instansi];
            let isValid = true;
            let firstErrorField = null;

            // Reset semua input agar kembali normal sebelum dicek
            fields.forEach(field => {
                field.classList.remove("input-error");
            });

            // Cek setiap field apakah kosong
            fields.forEach(field => {
                if (field.value.trim() === "") {
                    field.classList.add("input-error"); // Tambah warna merah
                    if (!firstErrorField) {
                        firstErrorField = field; // Simpan field pertama yang error
                    }
                    isValid = false;
                }
            });

            // Cek apakah jenis kelamin sudah dipilih
            if (!jenisKelamin) {
                let genderInputs = document.querySelectorAll('input[name="jenis_kelamin"]');
                genderInputs[0].focus(); // Fokus ke pilihan pertama
                isValid = false;
            }

            // Jika ada field yang error, scroll ke atasnya dan hentikan submit
            if (!isValid) {
                firstErrorField?.focus();
                event.preventDefault(); // Mencegah form terkirim
            }
        });
    </script>
</body>
</html>
<?php /**PATH C:\laragon\www\IoT-Production-main\resources\views/form.blade.php ENDPATH**/ ?>