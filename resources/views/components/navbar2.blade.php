<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/logo-navbar.png') }}" alt="Campustar" style="height: 30px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto d-flex"> 
                <div class="btn-group me-3"> 
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #E8F5FF; font-weight: 700; background-color: #008DFF; border-color: #008DFF;">Fitur kami</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/perguruantinggi">Perguruan Tinggi</a></li>
                        <li><a class="dropdown-item" href="/programstudi">Program Studi</a></li>
                        <li><a class="dropdown-item" href="/tesminatbakat">Tes Minat dan Bakat</a></li>
                    </ul>
                </div>
                <form class="d-flex me-auto" action="{{ route('search') }}" method="GET"> 
                    <div class="input-group">
                        <button class="btn btn-outline-primary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                        <input class="form-control" type="search" name="query" placeholder="Cari berdasarkan nama" aria-label="Search" style="width: 350px;">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; font-weight: 700;">
                        <img src="{{ asset('images/' . Auth::user()->photo) }}" class="rounded-circle me-2 nav-profile-pic" style="width: 28px; height: 28px;" alt="Profil">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/editprofile">Edit Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ url('/keluar') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Keluar</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li class="nav-item me-3"> 
                    <a class="btn btn-primary" href="/daftar" style="color: #E8F5FF; font-weight: 700; background-color: #008DFF; border-color: #008DFF;">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary masuk" href="/masuk">Masuk</a>
                </li>
            @endif
        </ul>
        </div>
    </div>
</nav>
