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
        <img src="/image/h-house.jpeg" alt="SMART HOME Starter Kit" class="img-fluid position-absolute end-0" style="height: 50px; margin: 10px;">
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
    
    <div class="container-fluid pt-5 px-0"> 
        <div class="position-relative bg-dark text-white p-3 text-center">
            <a href="/" class="btn btn-light position-absolute start-0" style="top: 13px; margin-left: 10px;">Kembali</a>
            <h4 class="m-0">RFID Presence - DEMO PRODUK</h4>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="row text-center mb-4 align-items-center">
            <div class="col-md-3 mb-3">
                <img src="image/detect.png" alt="Tap Card" width="50" id="tap-card-btn" style="cursor: pointer;">
                <p class="fw-bold mt-2">TEMPELKAN KARTU UNTUK<br>MELAKUKAN ABSENSI</p>
            </div>
            <div class="col-md-3 mb-3">
                <img src="image/rfid.png" alt="RFID" width="70">
            </div>
            <div class="col-md-3 mb-3" id="success-message" style="display: none;">
                <img src="image/ya.png" alt="Check" width="50">
                <p class="fw-bold mt-2">SELAMAT DATANG</p>
            </div>
            <div class="col-md-3 mb-3 position-relative" style="height: 100px;">
                <div id="error-message" style="display: none; position: absolute; left: 0; right: 0;">
                    <img src="image/no.png" alt="Invalid" width="50">
                    <p class="fw-bold mt-2">KARTU INVALID</p>
                </div>
            </div>
        </div>
        <hr class="border-3 border-dark my-4">
        <div class="container-fluid my-4 px-5">
            <div class="d-flex justify-content-between align-items-stretch gap-5">
                <div class="card text-white bg-danger shadow rounded-3 flex-grow-1" style="min-width: 300px; height: 200px;">
                    <div class="card-body d-flex flex-column justify-content-between position-relative h-100">
                        <div>
                            <h3 class="fw-bold m-0">6</h3>
                            <p class="m-0">INVALID CARD</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <a href="#" class="text-white text-decoration-none small fw-bold">Detail &rarr;</a>
                            <div style="font-size: 40px; opacity: 0.2;">&#10006;</div>
                        </div>
                    </div>
                </div>
                <div class="card text-white bg-success shadow rounded-3 flex-grow-1" style="min-width: 300px; height: 200px;">
                    <div class="card-body d-flex flex-column justify-content-between position-relative h-100">
                        <div>
                            <h3 class="fw-bold m-0">6</h3>
                            <p class="m-0">Sumber Daya Manusia</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <a href="#" class="text-white text-decoration-none small fw-bold">Detail &rarr;</a>
                            <div style="font-size: 40px; opacity: 0.2;">&#128100;</div>
                        </div>
                    </div>
                </div>
                <div class="card text-white bg-primary shadow rounded-3 flex-grow-1" style="min-width: 300px; height: 200px;">
                    <div class="card-body d-flex flex-column justify-content-between position-relative h-100">
                        <div>
                            <h3 class="fw-bold m-0">10</h3>
                            <p class="m-0">PRESENCE</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <a href="#" class="text-white text-decoration-none small fw-bold">Detail &rarr;</a>
                            <div style="font-size: 40px; opacity: 0.2;">&#128421;</div>
                        </div>
                    </div>
                </div>
            </div>
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
<?php /**PATH C:\Users\Acer\Desktop\project\iot\resources\views/produkRFID.blade.php ENDPATH**/ ?>