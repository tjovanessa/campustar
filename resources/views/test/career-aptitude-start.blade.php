<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mulai Tes - Campustar</title>
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
            <img class="banner-tes-minat" src="{{ asset('assets/banner-tes-mulai.png') }}" alt="">
        </div>  

        <div class="text-center mt-5 mb-5">
            <a href="/mulaites" class="btn btn-outline-primary button-more">Mulai Tes Minat & Bakat</a>
        </div>

        @if(Auth::check())
            <div class="akun d-flex align-items-center justify-content-center mt-5 mb-5">
                <p>Sudah pernah mengikuti tes sebelumnya?</p>
                <a href="/riwayat/{{ Auth::user()->id }}" class="ms-2 text-decoration-none">
                    <p class="fw-semibold text-primary">Lihat hasil riwayat tes kamu disini</p>
                </a>
            </div>
        @else

        @endif

    </div>

    @include('components.footer')

</body>
</html>
