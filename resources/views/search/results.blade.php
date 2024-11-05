<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Pencarian - Campustar</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.navbar2')

    <div class="container">
        <h4 class="mt-4 mb-4">Hasil Pencarian</h4>

        <div class="mb-5">
        @if($results->isEmpty())
            <p>Tidak ada hasil yang ditemukan untuk pencarian "{{ request('query') }}".</p>
        @else
            <ul>
            @foreach($results as $result)
                    @if(get_class($result) === 'App\Models\Major')
                        <li><a href="/programstudi/{{$result->id}}">{{ $result->name }}</a></li>
                    @elseif(get_class($result) === 'App\Models\Campus')
                        <li><a href="/perguruantinggi/{{$result->id}}">{{ $result->name }}</a></li>
                    @endif
                @endforeach
            </ul>
        @endif
        </div>
    </div>

    @include('components.footer')
    
</body>
</html>
