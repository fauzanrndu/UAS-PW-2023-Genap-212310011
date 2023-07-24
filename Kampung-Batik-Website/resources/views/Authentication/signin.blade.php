<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <header></header>

    <main class="container">
        <div class="card mb-0 mt-5 w-100 rounded-0 shadow">
            <div class="row g-0">
              <div class="col-md-6">
                <img src="/img/background/login.png" class="img-fluid " alt="...">
                <div class="card-img-overlay row align-items-center w-50 m-0 text-center text-white ">
                    <div class="">
                        <div class="card-body">
                            <p class="card-title">SELAMAT DATANG DI</p>
                            <h5 class="card-title">KAMPUNG BATIK</h5>
                            <h5 class="card-title">CIBULLUH BOGOR</h5>
                            <p class="card-title">Masuk untuk mendapatkan Akses Reservasi dan Belanja</p>
                        </div>
                      </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="card-body">
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- @if (session()->has('loginerror'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginerror')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
                    <div class="card-body" >
                        <h5 class="card-title">Masuk ke akun anda</h5>
                        <p class="card-text"><small class="text-body-secondary">Masukkan email dan password anda untuk masuk</small></p>

                        <form action="/sign-in" method="POST" class="mb-5">
                            @csrf
                          <div class="mb-3">
                            <label for="email" class="form-label"><small>Alamat email</small></label>
                            <input type="email" name="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp " required>
                          </div>
                          <div class="mb-3">
                            <label for="password" class="form-label"><small>Password</small></label>
                            <input type="password" name="password" class="form-control rounded-0" id="exampleInputPassword1" required>
                          </div>
                          <button type="submit" class="btn btn-success rounded-0">Lanjutkan</button>
                      </form>
                      <span class="card-title"><small class="text-body-secondary">Tidak memiliki akun ?</small></span>
                      <a href="/register" class="fw-bold text-dark link-offset-2 link-underline link-underline-opacity-0">Daftar</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
