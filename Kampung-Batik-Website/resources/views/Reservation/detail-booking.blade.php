<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <header class="">
        @include('partials.Reservation.navbar-reservasi')
    </header>
    <main class="container mb-5">
        <div class="mt-5 ">
            <div class="row">
              <div class="col-md-7">
                <div class="card p-4 mb-0">
                  <h2 class="mb-4">Data Diri Pemesan</h2>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>Nama:</th>
                        <td>John Doe</td>
                      </tr>
                      <tr>
                        <th>Nomor Telepon:</th>
                        <td>08123456789</td>
                      </tr>
                      <tr>
                        <th>Email:</th>
                        <td>johndoe@example.com</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="card border-0">
                    <div class="card-body m-auto ">
                        <button type="button" class="btn btn-success">Lanjut ke pembayaran</button>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-5 ">
                <div class="card p-4 ">
                  <h2 class="mb-4">Ringkasan Booking Reservasi</h2>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Paket</th>
                        <th>Tanggal</th>
                        <th>Jumlah Orang</th>
                        <th>Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Paket Handkerchief</td>
                        <td>2023-05-30</td>
                        <td>10</td>
                        <td>Rp 500,000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </main>
    <footer>
        @include('partials.Home.footerMain')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
