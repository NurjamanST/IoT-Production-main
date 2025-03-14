<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
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
        <img src="/image/Label/SmartHome-Label.png" alt="SMART HOME Starter Kit" class="img-fluid position-absolute top-10 end-0" style="height: 50px; margin-right: 10px;">
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
<?php /**PATH C:\laragon\www\IoT-Production-main\resources\views\house.blade.php ENDPATH**/ ?>