<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguruan Tinggi - Campustar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <?php echo $__env->make('components.navbar2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div id="rec-kampus" class="mt-5">
            <h4>Direktori Perguruan Tinggi</h4>
            <h6><?php echo e(count($campuses)); ?> perguruan tinggi ditemukan</h6>


            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                <?php $__currentLoopData = $campuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <a href="/perguruantinggi/<?php echo e($campus->id); ?>" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/'.$campus->banner)); ?>" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;"><?php echo e($campus->status); ?></button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/'.$campus->logo)); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0"><?php echo e($campus->name); ?></h5>
                                </div>  

                                <p class="small mt-2"><?php echo e(strlen($campus->description) > 150 ? substr($campus->description, 0, 150) . '...' : $campus->description); ?></p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2"><?php echo e($campus->location); ?></p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: <?php echo e($campus->accreditation); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <?php echo e($campuses->links()); ?>

            </div>

        </div>

        <div class="mt-5 mb-5 position-relative">
            <img class="banner-tes-minat" src="<?php echo e(asset('assets/banner-tes-minat.png')); ?>" alt="">
            <a href="/tesminatbakat" class="btn btn-primary position-absolute" style="bottom: 60px; right: 60px; color: #008DFF; font-weight: 700; border-color: #FFFFFF; background-color: #FFFFFF; text-decoration: none;">Ikuti tes minat dan bakat</a>
        </div>  

    </div>

    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH C:\Web Programming\AOL Web Programming\campustar\resources\views/campus/campus.blade.php ENDPATH**/ ?>