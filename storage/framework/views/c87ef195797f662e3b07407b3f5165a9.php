<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Farm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo e(('assets/css/style.css')); ?>">
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
        <img src="<?php echo e(('image/Label/smartfarmlabel.png')); ?>" alt="SMART HOME Starter Kit" class="img-fluid position-absolute top-10 end-0" style="height: 50px; margin-right: 10px;">
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
            <a href="<?php echo e(('/')); ?>" class="btn btn-light position-absolute start-0" style="top: 13px; margin-left: 10px;">Kembali</a>
            <h4 class="m-0">SMART FARM - DEMO PRODUK</h4>
        </div>
    </div>


    
    <div class="row mt-4 text-center justify-content-center">
        <!-- Update at for Kelembaban -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mx-5">
            <div class="border p-3 rounded shadow">
                <h5 class="alert alert-info">KELEMBABAN: 80%</h5>
                <img src="<?php echo e(('image/Icons/ph.png')); ?>" alt="ph" class="img-fluid">
                <div class="mt-4 mb-2">
                    <p class="btn btn-warning"><small><i class="bi bi-calendar-week"></i>  Update Data : 2025-03-01 16:54:55</small></p>
                </div>
            </div>
        </div>

        <!-- Kondisi POMPA -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mx-5">
            <div class="border p-3 rounded shadow">
                <h5 class="alert alert-primary">KONDISI POMPA</h5>
                <img src="image/Icons/pompa.png" alt="Kipas" class="img-fluid">
                <div class="my-2 col-12">
                    <p class="btn btn-success mt-3 col-auto"><i class="bi bi-lightbulb-fill"></i> NYALA</p>
                    <a href="#" class="btn btn-primary col-auto"><i class="bi bi-bucket-fill"></i> Klik Siram Disini</a>
                    <p class="btn btn-warning col-auto"><small><i class="bi bi-calendar-week"></i>  Update Data : 2025-03-01 16:54:55</small></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Keterangan Sistem -->
    <div class="row mt-4 justify-content-between align-items-center bg-primary text-white p-3 full-width">
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

    
    <div class="row mt-4 justify-content-between align-items-center p-3 full-width mx-5">
        <div class="justify-content-center my-">
            <div class="row col-12 justify-content-between">
                <h4 class="col-auto">Riwayat Data - SMART FARM</h4>
                <button class="btn btn-success text-white col-auto">Unduh File Excel</button>
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
                    <?php for ($i=1; $i <= 100; $i++){?>
                    <tr>
                        <td><?= $i?></td>
                        <td>07:00 WIB Selasa, 12/03/2025</td>
                        <td>80 %</td>
                        <td>Mati</td>
                        <td>07:00 WIB Selasa, 12/03/2025</td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    
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
<?php /**PATH C:\laragon\www\IoT-Production-main\resources\views/farm.blade.php ENDPATH**/ ?>