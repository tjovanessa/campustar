<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Campustar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.navbar2')

    <div id="banner">
        <img class="banner-img" src="{{ asset('assets/banner-home.png') }}" alt="">
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card fitur">
                    <a href="/perguruantinggi" class="text-decoration-none">
                        <img src="{{ asset('assets/logo-kampus.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fitur">Perguruan Tinggi</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card fitur">
                    <a href="/programstudi" class="text-decoration-none">
                        <img src="{{ asset('assets/logo-prodi.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fitur">Program Studi</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card fitur">
                    <a href="/tesminatbakat" class="text-decoration-none">
                        <img src="{{ asset('assets/logo-tes-minat.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fitur">Tes Minat dan Bakat</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-5 mb-5 position-relative">
            <img class="banner-tes-minat" src="{{ asset('assets/banner-tes-minat.png') }}" alt="">
            <a href="/tesminatbakat" class="btn btn-primary position-absolute" style="bottom: 60px; right: 60px; color: #008DFF; font-weight: 700; border-color: #FFFFFF; background-color: #FFFFFF; text-decoration: none;">Ikuti tes minat dan bakat</a>
        </div>  

        <div id="rec-kampus" class="mt-5">
            <h4>Rekomendasi Perguruan Tinggi</h4>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($campuses->take(4) as $campus)
                <div class="col">
                    <a href="/perguruantinggi/{{$campus->id}}" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{asset('assets/kampus/'.$campus->banner)}}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">{{$campus->status}}</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('assets/kampus/'.$campus->logo)}}" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">{{$campus->name}}</h5>
                                </div>  

                                <p class="small mt-2">{{ strlen($campus->description) > 150 ? substr($campus->description, 0, 150) . '...' : $campus->description }}</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/loc.png') }}" class="card-img-top" alt="..." style="width: 19px;">
                                        <p class="card-title mb-0 ml-2">{{$campus->location}}</p>
                                    </div>
                                    <div id="akreditasi">
                                        <p class="mb-0">Akreditasi: {{$campus->accreditation}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-5 mb-5">
                <a href="/perguruantinggi" class="btn btn-outline-primary button-more">Lihat Perguruan Tinggi Lainnya</a>
            </div>
        </div>
        
        <div id="rec-jurusan mt-5">
            <h4>Rekomendasi Program Studi</h4>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($majors->take(4) as $major)
                <div class="col">
                    <a href="/programstudi/{{$major->id}}" class="text-decoration-none">
                        <div class="card jurusan">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{asset('assets/jurusan/'.$major->banner)}}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">{{$major->status}}</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('assets/jurusan/'.strtolower($major->status).'.png')}}" class="card-img-top" alt="..." style="width: 35px;">
                                    <h5 class="card-title mb-0">{{$major->name}}</h5>
                                </div>  
                                <p class="small">{{ strlen($major->description) > 150 ? substr($major->description, 0, 150) . '...' : $major->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <a href="/programstudi" class="btn btn-outline-primary button-more">Lihat Program Studi Lainnya</a>
            </div>
        </div>

        <div class="mt-5">
            <h4>Kenapa Memilih Campustar?</h4>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
                <div class="col">
                    <div class="card alasan">
                    <div class="card-body">
                        <h4 class="card-title">Informasi Lengkap</h4>
                        <p>Jelajahi program studi yang ditawarkan oleh banyak kampus di Indonesia, dari diploma hingga sarjana. Temukan program yang sesuai dengan minat dan bakatmu.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card alasan">
                    <div class="card-body">
                        <h4 class="card-title">Fitur Interaktif</h4>
                        <p>Nikmati fitur interaktif seperti tes minat bakat dan forum diskusi untuk menentukan jurusan yang tepat dan berinteraksi dengan calon mahasiswa lainnya.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card alasan">
                    <div class="card-body">
                        <h4 class="card-title">Akses Mudah</h4>
                        <p>Akses mudah kapan saja dan di mana saja melalui perangkat kesayanganmu, memastikan kamu selalu mendapatkan informasi terbaru tanpa khawatir ketinggalan.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="about-us" class="mt-5">
            <h4>Tentang Campustar</h4>
            <div class="mt-4 mb-5">
            <p><strong><em>Campustar</em></strong> adalah platform pendidikan yang dirancang khusus untuk membantu calon mahasiswa, terutama siswa sekolah menengah atas, dalam mencari informasi terkait perguruan tinggi dan program studi. Campustar menyediakan berbagai fitur untuk memudahkan pengguna dalam membuat keputusan penting mengenai pendidikan tinggi mereka. Salah satu fitur utama Campustar adalah tes minat bakat, yang memberikan rekomendasi program studi berdasarkan hasil tes, membantu pengguna dalam menentukan pilihan yang paling sesuai dengan minat dan bakat mereka. Selain itu, pengguna dapat menemukan informasi lengkap tentang berbagai perguruan tinggi, termasuk visi misi, fakultas, jurusan yang tersedia, akreditasi, serta detail program studi seperti mata kuliah yang akan dipelajari, prospek karir, dan rekomendasi kampus teratas. Campustar juga dilengkapi dengan forum diskusi, tempat pengguna bisa berbagi pendapat, bertanya, dan menjawab pertanyaan satu sama lain, sehingga menciptakan komunitas yang saling mendukung. Fitur arsip memudahkan pengguna menyimpan informasi penting, sementara informasi dosen terkait pada universitas tertentu juga tersedia untuk memberikan gambaran lebih lengkap tentang pengalaman belajar yang akan diperoleh. Dengan Campustar, seluruh informasi pendidikan yang Anda butuhkan ada di satu tempat, membantu Anda membuat pilihan terbaik untuk masa depan akademis Anda. </p>
            </div>
        </div>

    </div>

    @include('components.footer')

</body>
</html>