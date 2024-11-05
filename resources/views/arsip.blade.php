<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip - Campustar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.navbar2')

    <div class="container">
        <div id="rec-kampus" class="mt-5 mb-5">
            <h4>Arsip Perguruan Tinggi</h4>
            <h6>2 perguruan tinggi ditemukan</h6>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                <div class="col">
                    <a href="/detailcampus" class="text-decoration-none">
                        <div class="card kampus">
                            <div class="position-relative" style="height: 160px;">
                                <img src="{{ asset('assets/kampus/binus.jpeg') }}" class="card-img-top" alt="..." style="height: 160px; width: 100%;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">SWASTA</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/kampus/logo binus.png') }}" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Bina Nusantara</h5>
                                </div>  

                                <p class="small">Universitas Bina Nusantara, dijenamakan sebagai Binus University, adalah salah satu universitas swasta Indonesia. Universitas ini bernaung di bawah lembaga pendidikan Bina...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/loc.png') }}" class="card-img-top" alt="..." style="width: 19px;">
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
                                <img src="{{ asset('assets/kampus/univ indonesia.jpg') }}" class="card-img-top" alt="..." style="height: 160px;">
                                <button type="button" class="btn btn-secondary button-status" style="position: absolute; bottom: 10px; left: 10px;">NEGERI</button>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/kampus/logo univ.indonesia.png') }}" class="card-img-top" alt="..." style="width: 50px;">
                                    <h5 class="card-title mb-0">Universitas Indonesia</h5>
                                </div>  

                                <p class="small">Universitas Indonesia yang biasa disingkat UI adalah perguruan tinggi negeri di Indonesia. UI merupakan salah satu universitas riset atau institusi akademik terkemuka di dunia yang...</p>

                                <div class="d-flex align-items-center justify-content-between kampus-bottom">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/loc.png') }}" class="card-img-top" alt="..." style="width: 19px;">
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
            </div>
        </div>
    </div>
        @include('components.footer')
</body>
</html>