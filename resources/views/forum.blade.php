<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum - Campustar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.navbar2')

    <div class="container">
        <h4 class="mt-5">Forum Diskusi</h4>

        <div class="new-forum mt-5">
            <div class="row">
                <div class="col-auto">
                    <img src="{{ asset('assets/profile/karina.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                </div>
                <div class="col">
                    <h6><strong>Anda</strong></h6>
                    <input type="text" class="form-forum mb-2" name="newforum" id="" placeholder="Tulis disini...">
                </div>
            </div>
            <hr>
            <div class="text-end mb-2"> 
                <a class="btn btn-outline-primary me-2" href="/login" style="color: #008DFF; font-weight: 700; border-color: #008DFF; background-color: #FFFFFF">Batal</a>
                <a class="btn btn-primary me-4" href="/signup" style="color: #E8F5FF; font-weight: 700; background-color: #008DFF; border-color: #008DFF;">Unggah</a>    
            </div>
        </div>

        <div class="card old-forum mt-5 mb-5">
            <ul class="list-group list-group-flush">
                <a href="" class="text-decoration-none">
                    <li class="list-group-item list-forum">
                        <div class="row">
                            <div class="col-auto">
                                <img src="{{ asset('assets/profile/yujin.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                            </div>  
                            <div class="col">
                                <h6><strong>Yujin</strong></h6>
                                <p class="mb-2">Halo semuanya! Saya sedang bingung memilih jurusan antara teknik Informatika dan sistem informasi. Apakah ada yang mempunyai saran?</p>
                                <div class="d-flex align-items-center mb-2">
                                    <img class="mt-1" src="{{ asset('assets/komen.png') }}" alt="">
                                    <p class="mt-0 mb-0 text-muted" style="margin-bottom: 0px; margin-left: 8px;">5</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </a>
                
                <a href="" class="text-decoration-none">
                    <li class="list-group-item list-forum">
                        <div class="row">
                            <div class="col-auto">
                                <img src="{{ asset('assets/profile/winter.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                            </div>
                            <div class="col">
                                <h6><strong>Winter</strong></h6>
                                <p class="mb-2">Baru saja selesai tes minat dan bakat di aplikasi ini. Hasilnya cukup mengejutkan, ternyata saya lebih cocok di bidang Jurnalistik daripada Manajemen. Ada yang pernah mengalami hal yang sama?</p>
                                <div class="d-flex align-items-center mb-2">
                                    <img class="mt-1" src="{{ asset('assets/komen.png') }}" alt="">
                                    <p class="mt-0 mb-0 text-muted" style="margin-bottom: 0px; margin-left: 8px;">1</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </a>

                <a href="" class="text-decoration-none">
                    <li class="list-group-item list-forum">
                        <div class="row">
                            <div class="col-auto">
                                <img src="{{ asset('assets/profile/sana.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                            </div>
                            <div class="col">
                                <h6><strong>Sana</strong></h6>
                                <p class="mb-2">Hai semuanya, ada tips belajar yang efektif buat persiapan masuk universitas? Saya sering merasa kewalahan dengan materi yang harus dipelajari.</p>
                                <div class="d-flex align-items-center mb-2">
                                    <img class="mt-1" src="{{ asset('assets/komen.png') }}" alt="">
                                    <p class="mt-0 mb-0 text-muted" style="margin-bottom: 0px; margin-left: 8px;">7</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </a>

                <a href="" class="text-decoration-none">
                    <li class="list-group-item list-forum">
                        <div class="row">
                            <div class="col-auto">
                                <img src="{{ asset('assets/profile/mina.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                            </div>
                            <div class="col">
                                <h6><strong>Mina</strong></h6>
                                <p class="mb-2">Ada yang tahu tentang beasiswa yang bagus untuk jurusan kedokteran di dalam atau luar negeri? soalnya saya berminat untuk daftar kedokteran</p>
                                <div class="d-flex align-items-center mb-2">
                                    <img class="mt-1" src="{{ asset('assets/komen.png') }}" alt="">
                                    <p class="mt-0 mb-0 text-muted" style="margin-bottom: 0px; margin-left: 8px;">6</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </a>

                <a href="" class="text-decoration-none">
                    <li class="list-group-item list-forum">
                        <div class="row">
                            <div class="col-auto">
                                <img src="{{ asset('assets/profile/yuqi.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                            </div>
                            <div class="col">
                                <h6><strong>Yuqi</strong></h6>
                                <p class="mb-2">Bagaimana cara mempersiapkan diri untuk memasuki dunia perkuliahan? Apakah ada persiapan khusus yang harus saya lakukan?</p>
                                <div class="d-flex align-items-center mb-2">
                                    <img class="mt-1" src="{{ asset('assets/komen.png') }}" alt="">
                                    <p class="mt-0 mb-0 text-muted" style="margin-bottom: 0px; margin-left: 8px;">3</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </a>

                <a href="" class="text-decoration-none">
                    <li class="list-group-item list-forum">
                        <div class="row">
                            <div class="col-auto">
                                <img src="{{ asset('assets/profile/lily.png') }}" class="card-img-top" alt="..." style="width: 35px;">
                            </div>
                            <div class="col">
                                <h6><strong>Lily</strong></h6>
                                <p class="mb-2">Bagaimana cara mempertimbangkan biaya kuliah dan mencari beasiswa saat memilih jurusan dan kampus?</p>
                                <div class="d-flex align-items-center mb-2">
                                    <img class="mt-1" src="{{ asset('assets/komen.png') }}" alt="">
                                    <p class="mt-0 mb-0 text-muted" style="margin-bottom: 0px; margin-left: 8px;">10</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </a>


            </ul>
        </div>  

    </div>

    @include('components.footer')

</body>
</html>