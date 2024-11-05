<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details - Campustar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.navbar2')

    <div class="container">
        <div class="mt-5">
            <img class="banner-campus" src="{{ asset('assets/kampus/binus.jpeg') }}" alt="">
        </div>

        <div class="mt-5 details">
            <h3><strong>Teknik Informatika - BINUS University</strong></h3>
            <h5 class="mt-5"><strong>Deskripsi Program</strong></h5>
            <p>Memiliki pemahaman dan penguasaan Computer Science (Teknik Informatika) merupakan sebuah kunci utama dalam menghadapi tantangan dunia global saat ini. Perkembangan yang sangat cepat di berbagai sektor industri dan ICT membutuhkan banyak sumber daya manusia (SDM)/ talent yang berperan penting sebagai inisiator teknologi dengan solusi yang kreatif. Program Computer Science menekankan pada beberapa bidang spesifik yang menjadi pilihan bagi mahasiswa, diantaranya Intelligent Systems, Database Technology, Interactive Multimedia, Software Engineering, dan Network Technology.</p>

            <h5 class="mt-4"><strong>Kurikulum</strong></h5>
            <p>Matematika diskrit, aljabar linear, statistika dasar, algoritma dan pemrograman, metode desain program, struktur data, kalkulus, komputasi ilmiah, interaksi manusia dan komputer, desain dan analisis algoritma, jaringan komputer, fisika komputasi, teknologi basis data, kecerdasan buatan, pemrograman berorientasi objek, metodologi penelitian dalam ilmu komputer, biologi komputasi, rekayasa perangkat lunak,  desain basis data.</p>
        </div>

        <div class="text-center mb-5 mt-5">
            <a href="/detailmajor" class="btn btn-outline-primary button-more">Ketahui Teknik Informatika lebih lanjut!</a>
        </div>

        <div class="row">
            <div class="col-4">
                <h5><strong>Informasi Jurusan</strong></h5>
                <div class="mt-3 info-jurusan">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="sidebar-info mb-0"><strong>Akreditasi</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1">A</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="sidebar-info mb-0"><strong>Durasi</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1">4 Tahun</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="sidebar-info mb-0"><strong>Gelar Akademik</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1">S.Kom.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="sidebar-info mb-0"><strong>Biaya Gedung</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1">Rp44.000.000</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="sidebar-info mb-0"><strong>Biaya Semester</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1">Rp27.000.000*</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="sidebar-info mb-0"><strong>Tersedia pada</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1">BINUS @Alam Sutera <br>
                            BINUS @Kemanggisan <br>
                            BINUS @Malang <br>
                            BINUS @Bandung</p>
                        </div>
                        <p class="mt-3 mb-5 info-small">*biaya yang ditampilkan merupakan estimasi</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h5><strong>Informasi Dosen</strong></h5>
                <div class="mt-3 info-dosen">
                    <h6><strong>Dr. Ir. Alexander Agung Santoso Gunawan, S.Si., 
                    M.T., M.Sc., IPM, CIRR</strong></h6>
                    <p class="mb-0">S1 - </p>
                    <p class="mb-0">S2 - </p>
                    <p>S3 - </p>

                    <h6><strong>Dr. Ir. Budi Yulianto, S.Kom., M.M., CBA., IPM</strong></h6>
                    <p class="mb-0">S1 - </p>
                    <p class="mb-0">S2 - </p>
                    <p>S3 - </p>

                    <h6><strong>Dr. Ir. Edy Irwansyah, S.T., M.Si., IPM, ASEAN Eng.</strong></h6>
                    <p class="mb-0">S1 - </p>
                    <p class="mb-0">S2 - </p>
                    <p>S3 - </p>
                </div>
            </div>
            <div class="col-4">
                <h5><strong>Alumni</strong></h5>
                <div class="mt-3 info-alumni">
                    <h6 class="mb-0"><strong>Tan Wijaya</strong></h6>
                    <p>President Direktor PT. IBM Indonesia</p>

                    <h6 class="mb-0"><strong>Wilson Cuaca</strong></h6>
                    <p>Co-Founder and Managing Partner East Ventures</p>

                    <h6 class="mb-0"><strong>William Tanuwijaya</strong></h6>
                    <p>Former CEO Tokepedia</p>

                    <h6 class="mb-0"><strong>Deny Rahardjo</strong></h6>
                    <p>CIO Indonesia and Rest of the World Asia Pulp and Paper (APP)</p>

                    <h6 class="mb-0"><strong>Ayu Zulia Shafira</strong></h6>
                    <p>Founder & Owner WHAT'S UP Cafe</p>

                    <h6 class="mb-0"><strong>Benny Fajarai</strong></h6>
                    <p>CEO Qlapa.com</p>
                </div>
            </div>
    </div>

        <div class="mt-5 mb-5 position-relative">
            <img class="banner-tes-minat" src="{{ asset('assets/banner-tes-minat.png') }}" alt="">
            <a href="" class="btn btn-primary position-absolute" style="bottom: 60px; right: 60px; color: #008DFF; font-weight: 700; border-color: #FFFFFF; background-color: #FFFFFF; text-decoration: none;">Ikuti tes minat dan bakat</a>
        </div>  

    </div>
    
    @include('components.footer')

</body>
</html>