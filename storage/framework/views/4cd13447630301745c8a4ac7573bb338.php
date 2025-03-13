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
    <img src="/image/Label/RFID-Label.png" alt="SMART HOME Starter Kit" class="img-fluid position-absolute top-10 end-0" style="height: 50px; margin-right: 10px;">
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
                <h4>Invalid Card - RFID Presence</h4>
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
                    <th>Tanggal dan Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2345771DD</td>
                    <td>07:00 WIB Selasa, 12/03/2025</td>
                    <td>
                        <a href="/form" class="btn btn-success btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.3328 2.92893V17.0711" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round"/>
                                <path d="M17.4039 10H3.26172" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round"/>
                              </svg>
                        </a>
                        <button class="btn btn-danger btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M17.833 4.98307C15.058 4.70807 12.2663 4.56641 9.48301 4.56641C7.83301 4.56641 6.18301 4.64974 4.53301 4.81641L2.83301 4.98307" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.4165 4.1415L7.59984 3.04984C7.73317 2.25817 7.83317 1.6665 9.2415 1.6665H11.4248C12.8332 1.6665 12.9415 2.2915 13.0665 3.05817L13.2498 4.1415" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.0412 7.6167L15.4995 16.0084C15.4078 17.3167 15.3328 18.3334 13.0078 18.3334H7.65785C5.33285 18.3334 5.25785 17.3167 5.16618 16.0084L4.62451 7.6167" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.94092 13.75H11.7159" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.24951 10.4165H12.4162" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2345772DD</td>
                    <td>07:00 WIB Selasa, 12/03/2025</td>
                    <td>
                        <button class="btn btn-success btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.3328 2.92893V17.0711" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round"/>
                                <path d="M17.4039 10H3.26172" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M17.833 4.98307C15.058 4.70807 12.2663 4.56641 9.48301 4.56641C7.83301 4.56641 6.18301 4.64974 4.53301 4.81641L2.83301 4.98307" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.4165 4.1415L7.59984 3.04984C7.73317 2.25817 7.83317 1.6665 9.2415 1.6665H11.4248C12.8332 1.6665 12.9415 2.2915 13.0665 3.05817L13.2498 4.1415" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.0412 7.6167L15.4995 16.0084C15.4078 17.3167 15.3328 18.3334 13.0078 18.3334H7.65785C5.33285 18.3334 5.25785 17.3167 5.16618 16.0084L4.62451 7.6167" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.94092 13.75H11.7159" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.24951 10.4165H12.4162" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2345773DD</td>
                    <td>07:00 WIB Selasa, 12/03/2025</td>
                    <td>
                        <button class="btn btn-success btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.3328 2.92893V17.0711" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round"/>
                                <path d="M17.4039 10H3.26172" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M17.833 4.98307C15.058 4.70807 12.2663 4.56641 9.48301 4.56641C7.83301 4.56641 6.18301 4.64974 4.53301 4.81641L2.83301 4.98307" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.4165 4.1415L7.59984 3.04984C7.73317 2.25817 7.83317 1.6665 9.2415 1.6665H11.4248C12.8332 1.6665 12.9415 2.2915 13.0665 3.05817L13.2498 4.1415" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.0412 7.6167L15.4995 16.0084C15.4078 17.3167 15.3328 18.3334 13.0078 18.3334H7.65785C5.33285 18.3334 5.25785 17.3167 5.16618 16.0084L4.62451 7.6167" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.94092 13.75H11.7159" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.24951 10.4165H12.4162" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2345774DD</td>
                    <td>07:00 WIB Selasa, 12/03/2025</td>
                    <td>
                        <button class="btn btn-success btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.3328 2.92893V17.0711" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round"/>
                                <path d="M17.4039 10H3.26172" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M17.833 4.98307C15.058 4.70807 12.2663 4.56641 9.48301 4.56641C7.83301 4.56641 6.18301 4.64974 4.53301 4.81641L2.83301 4.98307" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.4165 4.1415L7.59984 3.04984C7.73317 2.25817 7.83317 1.6665 9.2415 1.6665H11.4248C12.8332 1.6665 12.9415 2.2915 13.0665 3.05817L13.2498 4.1415" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.0412 7.6167L15.4995 16.0084C15.4078 17.3167 15.3328 18.3334 13.0078 18.3334H7.65785C5.33285 18.3334 5.25785 17.3167 5.16618 16.0084L4.62451 7.6167" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.94092 13.75H11.7159" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.24951 10.4165H12.4162" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2345775DD</td>
                    <td>07:00 WIB Selasa, 12/03/2025</td>
                    <td>
                        <button class="btn btn-success btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.3328 2.92893V17.0711" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round"/>
                                <path d="M17.4039 10H3.26172" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M17.833 4.98307C15.058 4.70807 12.2663 4.56641 9.48301 4.56641C7.83301 4.56641 6.18301 4.64974 4.53301 4.81641L2.83301 4.98307" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.4165 4.1415L7.59984 3.04984C7.73317 2.25817 7.83317 1.6665 9.2415 1.6665H11.4248C12.8332 1.6665 12.9415 2.2915 13.0665 3.05817L13.2498 4.1415" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.0412 7.6167L15.4995 16.0084C15.4078 17.3167 15.3328 18.3334 13.0078 18.3334H7.65785C5.33285 18.3334 5.25785 17.3167 5.16618 16.0084L4.62451 7.6167" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.94092 13.75H11.7159" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.24951 10.4165H12.4162" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>2345776DD</td>
                    <td>07:00 WIB Selasa, 12/03/2025</td>
                    <td>
                        <button class="btn btn-success btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M10.3328 2.92893V17.0711" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round"/>
                                <path d="M17.4039 10H3.26172" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                <path d="M17.833 4.98307C15.058 4.70807 12.2663 4.56641 9.48301 4.56641C7.83301 4.56641 6.18301 4.64974 4.53301 4.81641L2.83301 4.98307" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.4165 4.1415L7.59984 3.04984C7.73317 2.25817 7.83317 1.6665 9.2415 1.6665H11.4248C12.8332 1.6665 12.9415 2.2915 13.0665 3.05817L13.2498 4.1415" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.0412 7.6167L15.4995 16.0084C15.4078 17.3167 15.3328 18.3334 13.0078 18.3334H7.65785C5.33285 18.3334 5.25785 17.3167 5.16618 16.0084L4.62451 7.6167" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.94092 13.75H11.7159" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.24951 10.4165H12.4162" stroke="#FFFEFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
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
    </script>
</body>
</html>
<?php /**PATH C:\laragon\www\IoT-Production-main\resources\views/invalid.blade.php ENDPATH**/ ?>