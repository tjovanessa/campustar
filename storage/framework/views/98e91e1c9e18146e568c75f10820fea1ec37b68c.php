<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Campustar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mt-5">
                <div class="d-flex justify-content-center mb-4">
                    <img src="<?php echo e(asset('assets/logo-signup-login.png')); ?>" alt="" width="240">
                </div>
                <form action="<?php echo e(route('auth.register')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="" class="fw-semibold my-2">Nama Lengkap</label><label for="" class="text-danger">*</label>
                        <input type="text" class="form-control mb-2" name="name" id="" placeholder="Masukkan nama lengkap Anda" style="border-width: 2px;" value="<?php echo e(old('name')); ?>">

                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="" class="fw-semibold my-2">Nomor Telepon</label><label for="" class="text-danger">*</label>
                        <input type="text" class="form-control mb-2" name="phone" id="" placeholder="Masukkan nomor telepon Anda" style="border-width: 2px;" value="<?php echo e(old('phone')); ?>">

                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="" class="fw-semibold my-2">Email</label><label for="" class="text-danger">*</label>
                        <input type="email" class="form-control mb-2" name="email" id="" placeholder="Masukkan email Anda" style="border-width: 2px;" value="<?php echo e(old('email')); ?>">

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="" class="fw-semibold my-2">Kata Sandi</label><label for="" class="text-danger">*</label>
                        <input type="password" class="form-control mb-2" name="password" id="" placeholder="Masukkan kata sandi Anda" style="border-width: 2px;" value="<?php echo e(old('password')); ?>">

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="" class="fw-semibold my-2">Konfirmasi Kata Sandi</label><label for="" class="text-danger">*</label>
                        <input type="password" class="form-control mb-2" name="confirm_password" id="" placeholder="Masukkan konfirmasi kata sandi Anda" style="border-width: 2px;">

                        <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="btn-group my-2" data-toggle="buttons">
                        <div class="align-items-start">
                            <input type="checkbox" name="tnc" id="tnc" autocomplete="off">
                        </div>
                        <label for="" class="ms-2">Dengan menggunakan Campustar, saya menyetujui syarat dan ketentuan yang berlaku</label>

                        <?php $__errorArgs = ['tnc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100 mt-3" style="color: #FFFFFF; font-weight: 600; border-color: #008DFF;">Daftar</button>
                </form>

                <div class="akun d-flex align-items-center justify-content-center mt-3 mb-5">
                    <p>Sudah punya akun Campustar?</p>
                    <a href="/masuk" class="ms-2 text-decoration-none">
                        <p class="fw-semibold text-primary">Masuk di sini</p>
                    </a>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Web Programming\AOL Web Programming\campustar\resources\views/auth/signup.blade.php ENDPATH**/ ?>