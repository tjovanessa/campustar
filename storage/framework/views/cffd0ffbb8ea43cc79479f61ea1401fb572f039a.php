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
            <h6>1000 perguruan tinggi ditemukan</h6>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                <div class="col">
                    <a href="/detailcampus" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/binus.jpeg')); ?>" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SWASTA</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo binus.png')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Bina Nusantara</h5>
                                </div>  

                                <p class="small">Universitas Bina Nusantara, dijenamakan sebagai Binus University, adalah salah satu universitas swasta Indonesia. Universitas ini bernaung di bawah lembaga pendidikan Bina...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Jakarta, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/univ indonesia.jpg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">NEGERI</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo univ.indonesia.png')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Indonesia</h5>
                                </div>  

                                <p class="small">Universitas Indonesia yang biasa disingkat UI adalah perguruan tinggi negeri di Indonesia. UI merupakan salah satu universitas riset atau institusi akademik terkemuka di dunia yang...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Depok, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/brawijaya.jpg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">NEGERI</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo brawijaya.jpeg')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Brawijaya</h5>
                                </div>  

                                <p class="small">Universitas Brawijaya didirikan oleh Presiden Republik Indonesia pada tanggal 11 Juli 1961. UB merupakan kampus elit di Indonesia dengan lebih dari 60.000 mahasiswa...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Malang, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/untar.jpg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SWASTA</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo untar.jpg')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Tarumanagara</h5>
                                </div>  

                                <p class="small">Universitas Tarumanagara adalah salah satu universitas swasta tertua yang berada di Jakarta, Indonesia. Nama universitas ini berasal dari nama kerajaan Tarumanagara. Universitas...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Jakarta, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/unpad.jpg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">NEGERI</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo unpad.png')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Padjajaran</h5>
                                </div>  

                                <p class="small">Universitas Padjadjaran adalah sebuah perguruan tinggi negeri di Jawa Barat, Indonesia. Universitas Padjadjaran mendapatkan peringkat 751-800 pada...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Bandung, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/ciputra.jpg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SWASTA</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo uc.jpeg')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Ciputra</h5>
                                </div>  

                                <p class="small">Universitas Ciputra merupakan perguruan tinggi yang berfokus pada bidang akademik dan kewirausahaan. Oleh karena itu, para mahasiswa diharapkan mengembangkan...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Surabaya, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/sanata dharma.jpg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SWASTA</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo sanata dharma.png')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Sanata Dharma</h5>
                                </div>  

                                <p class="small">Universitas Sanata Dharma adalah universitas Katolik yang berlokasi di Yogyakarta. Universitas Sanata Dharma (USD) telah berhasil meraih akreditasi perguruan tinggi swasta...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Yogyakarta, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/uph.jpg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SWASTA</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo uph.jpg')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Pelita Harapan</h5>
                                </div>  

                                <p class="small">UPH (Universitas Pelita Harapan) adalah salah satu universitas swasta terkemuka di Indonesia yang terletak di Lippo Village, Tangerang, Banten. Didirikan pada tahun 1994, UPH...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Tangerang, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/airlangga.jpg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">NEGERI</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo unair.png')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Airlangga</h5>
                                </div>  

                                <p class="small">Universitas Airlangga memiliki sebuah nilai sejarah yang otentik, terutama dari segi pendiriannya. Universitas ini didirikan pada tepat pada tanggal 10 November 1954...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Surabaya, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/unsri.jpg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">NEGERI</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo unsri.png')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Sriwijaya</h5>
                                </div>  

                                <p class="small">Universitas Sriwijaya (Unsri) meraih peringkat ke-36 perguruan tinggi terbaik di Indonesia versi Kemenristekdikti. Unsri juga meraih peringkat ke-15 sebagai Universitas terbaik...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Palembang, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/gunadarma.jpeg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SWASTA</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo gundar.png')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Gunadarma</h5>
                                </div>  

                                <p class="small">Universitas Gunadarma adalah salah satu perguruan tinggi swasta terkemuka di Indonesia. Universitas ini didirikan pada tahun 1981 sebagai Program Pendidikan Ilmu...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Depok, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/telkom.jpeg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SWASTA</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo telkom.png')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Telkom</h5>
                                </div>  

                                <p class="small">Universitas Telkom adalah sebuah perguruan tinggi swasta milik BUMN yang terletak di Bandung, Jawa Barat. Berdiri pada 14 Agustus 2013 dari penggabungan empat perguruan...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Jakarta, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/itb.jpg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">NEGERI</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo itb.png')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Institut Teknologi Bandung</h5>
                                </div>  

                                <p class="small">Institut Teknologi Bandung (ITB) adalah sebuah perguruan tinggi negeri yang terletak di Kota Bandung, Jawa Barat. Nama ITB diresmikan pada tanggal 2 Maret 1959. Institut Teknologi...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Bandung, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="<?php echo e(asset('assets/kampus/atmajaya.jpg')); ?>" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SWASTA</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo e(asset('assets/kampus/logo atmajaya.png')); ?>" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Atmajaya</h5>
                                </div>  

                                <p class="small">Universitas Katolik Indonesia Atma Jaya Unika Atma Jaya merupakan salah satu Perguruan Tinggi Swasta terbaik se-Indonesia. Unika Atma Jaya mendapatkan akreditasi A dari Badan...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo e(asset('assets/loc.png')); ?>" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">Yogyakarta, Indonesia</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-5 mb-5 position-relative">
            <img class="banner-tes-minat" src="<?php echo e(asset('assets/banner-tes-minat.png')); ?>" alt="">
            <a href="" class="btn btn-primary position-absolute" style="bottom: 60px; right: 60px; color: #008DFF; font-weight: 700; border-color: #FFFFFF; background-color: #FFFFFF; text-decoration: none;">Ikuti tes minat dan bakat</a>
        </div>  

    </div>
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH C:\Web Programming\AOL Web Programming\campustar\resources\views/campus.blade.php ENDPATH**/ ?>