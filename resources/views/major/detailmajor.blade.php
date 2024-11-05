<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Program Studi - Campustar</title>
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
            <img class="banner-campus" src="{{asset('assets/jurusan/'.$major->banner)}}" alt="">
        </div>

        <div class="mt-5 details">
            <h3><strong>{{$major->name}}</strong></h3>
            <p class="mt-3">{{$major->description}}</p>

            <h5 class="mt-4"><strong>Prospek Kerja</strong></h5>
            <p>{{$major->career}}</p>

            <h5 class="mt-4"><strong>Kenapa Harus Memilih Jurusan ini</strong></h5>
            <p>{{$major->reason}}</p>

            <h5 class="mt-4"><strong>Dunia Perkuliahan</strong></h5>
            <p>{{$major->curriculum}}</p>
        </div>

        <div class="mt-5 list-top-campus">
            <h5><strong>Perguruan Tinggi Top</strong></h5>
            <div class="d-flex justify-content-between">
                @foreach($topCampuses as $topCampus)
                <div class="d-flex align-items-center">
                    <img src="{{asset('assets/kampus/' . $topCampus->campus->logo)}}" class="card-img-top" alt="Logo {{$topCampus->campus->name}}" style="width: 50px;">
                    <a href="/perguruantinggi/{{$topCampus->campus->id}}" class="card-title mb-0">{{$topCampus->campus->name}}</a>
                </div>
                @endforeach
            </div>
        </div>

        <!-- <div class="mt-5 list-top-campus">
            <h5><strong>Perguruan Tinggi Top</strong></h5>
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/kampus/logo binus.png') }}" class="card-img-top" alt="..." style="width: 50px;">
                    <a href="/detailcampus" class="card-title mb-0">Universitas Bina Nusantara</a>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/kampus/logo univ.indonesia.png') }}" class="card-img-top" alt="..." style="width: 50px;">
                    <a href="" class="card-title mb-0">Universitas Indonesia</a>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/kampus/logo itb.png') }}" class="card-img-top" alt="..." style="width: 50px;">
                    <a href="" class="card-title mb-0">Institut Teknologi Bandung</a>
                </div>
            </div>
        </div> -->

        <div class="mt-5 mb-5 position-relative">
            <img class="banner-tes-minat" src="{{ asset('assets/banner-tes-minat.png') }}" alt="">
            <a href="/tesminatbakat" class="btn btn-primary position-absolute" style="bottom: 60px; right: 60px; color: #008DFF; font-weight: 700; border-color: #FFFFFF; background-color: #FFFFFF; text-decoration: none;">Ikuti tes minat dan bakat</a>
        </div> 

    </div>
    
    @include('components.footer')
    
</body>
</html>