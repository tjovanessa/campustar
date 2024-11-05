<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Campustar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="bg-lightblue"> 
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="white-box p-4 mt-5"> 
                        <form action="{{ route('updateprofile') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="d-flex flex-column align-items-center mb-4">
                                        <div class="profile-pic mb-2">
                                            <img src="{{ asset('images/' . $user->photo) }}" alt="Profile Picture" class="rounded-circle mb-2" id="profileImage" style="width: 150px; height:150px; object-fit: cover;">
                                        </div>
                                        <input type="file" name="photo" id="photoInput" class="inputfile" />
                                        <label for="photoInput">Ubah Foto</label>
                                    </div>
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label for="" class="fw-semibold my-2">Nama Lengkap</label>
                                <input type="text" class="form-control mb-2" name="name" id=""  placeholder="Masukkan nama lengkap Anda" value="{{ old('name', $user->name) }}" style="border-width: 2px;">

                                @error('name')
                                    <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="" class="fw-semibold my-2">Nomor Telepon</label>
                                <input type="text" class="form-control mb-2" name="phone" id="" placeholder="Masukkan nomor telepon Anda" value="{{ old('phone', $user->phone) }}" style="border-width: 2px;">

                                @error('phone')
                                    <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="" class="fw-semibold my-2">Email</label>
                                <input type="email" class="form-control mb-2" name="email" id="" placeholder="Masukkan email Anda" value="{{ old('email', $user->email) }}" style="border-width: 2px;">

                                @error('email')
                                    <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="" class="fw-semibold my-2">Kata Sandi Baru</label>
                                <input type="password" class="form-control mb-2" name="password" id="" placeholder="Masukkan kata sandi baru Anda" style="border-width: 2px;">

                                @error('password')
                                    <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="" class="fw-semibold my-2">Konfirmasi Kata Sandi Baru</label>
                                <input type="password" class="form-control mb-2" name="confirm_password" id="" placeholder="Masukkan konfirmasi kata sandi baru Anda" style="border-width: 2px;">

                                @error('confirm_password')
                                <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100 mt-4 mb-3" style="color: #FFFFFF; font-weight: 700; background-color: #008DFF; border-color: #008DFF;">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
</body>
</html>
