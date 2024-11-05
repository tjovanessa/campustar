<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Perguruan Tinggi - Campustar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <?php echo $__env->make('components.navbar2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div class="mt-5">
            <img class="banner-campus" src="<?php echo e(asset('assets/kampus/'.$campus->banner)); ?>" alt="">
        </div>

        <div class="mt-5">
            <h3><strong><?php echo e($campus->name); ?></strong></h3>
        </div>

        <div class="mt-3 mb-5">
            <div class="row">
                <div class="col-md-9 content-detail-campus" style="padding-right: 40px;">
                    <p><?php echo $campus->description; ?></p>
                </div>

                <div class="col-md-3 sidebar d-flex flex-column h-100">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="sidebar-info mb-0"><strong>Website</strong></p>
                        </div>
                        <div class="col-md-6">
                            <a href="http://<?php echo e($campus->web); ?>" target="_blank" class="text-decoration-none"><?php echo e($campus->web); ?></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <p class="sidebar-info mb-0"><strong>Email</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-0"><?php echo e($campus->email); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <p class="sidebar-info mb-0"><strong>Telepon</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-0"><?php echo e($campus->phone); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <p class="sidebar-info mb-0"><strong>Akreditasi</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-0"><?php echo e($campus->accreditation); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <p class="sidebar-info mb-0"><strong>Lokasi</strong></p>
                        </div>
                        <div class="col-md-6 mb-0">
                            <p class="mb-0"><?php echo e($campus->location); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <p class="sidebar-info mb-0"><strong>Alamat</strong></p>
                        </div>
                        <div class="col-md-6 mb-0">
                            <p class="mb-3"><?php echo e($campus->address); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="list-faculty" class="mb-5">
            <h4 class="mb-4">Fakultas dan Program Studi</h4>
            <?php $__currentLoopData = $campus->faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-3 faculty">
                <h5><strong><?php echo e($faculty->name); ?></strong></h5>
                <p><?php echo e($faculty->major); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="mt-5 mb-5 position-relative">
            <img class="banner-tes-minat" src="<?php echo e(asset('assets/banner-tes-minat.png')); ?>" alt="">
            <a href="/tesminatbakat" class="btn btn-primary position-absolute" style="bottom: 60px; right: 60px; color: #008DFF; font-weight: 700; border-color: #FFFFFF; background-color: #FFFFFF; text-decoration: none;">Ikuti tes minat dan bakat</a>
        </div>  

    </div>

    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH C:\Web Programming\AOL Web Programming\campustar\resources\views/campus/detailcampus.blade.php ENDPATH**/ ?>