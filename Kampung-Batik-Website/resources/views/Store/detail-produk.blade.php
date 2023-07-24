<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <style>

    /* CSS */
#quantity {
  width: 100px;
}

#totalPrice {
  margin-top: 10px;
}
  </style>
  <body>
    <header>
        @include('partials.Store.navbar-toko')
    </header>

    <main class="container mb-5">
        {{-- produk --}}
        <div class="card mb-0 mt-5 w-100 border-0">
            <div class="row g-0">
                {{-- gambar --}}
              <div class="col-md-4">
                <img src="{{ $produk->image }}" class="img-fluid" alt="...">
              </div>
              {{-- deskripsi --}}
              <div class="col-md-5">
                <div class="card-body">
                    <h5 class="card-title">{{ $produk->name }}</h5>
                    <p class="card-text">{{ $produk->description }}</p>
                    <h5 class="card-title">Rp {{ $produk->price }}</h5>
                </div>
              </div>
              {{-- crud --}}
                <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body rounded-0 ">
                          <h5>Atur pembelian</h5>
                        </div>
                      </div>
                      <div class="card rounded-0 border-0">
                        <div class="card-body rounded-0">
                            <div class="card border-0">
                                <div class="row g-0">
                                  <div class="col-md-3">
                                    <img src="{{ $produk->image }}" class="img-fluid" alt="...">
                                  </div>
                                  <div class="col-md-9 row align-items-center">
                                    <div class="">
                                        <p class="m-0 fs-6">{{ $produk->name }}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                      </div>
                    <div class="card-body mt-0">
                        <div class="input-group w-50 ">
                            <button type="button" class="btn btn-outline-success" id="btnMinus">-</button>
                            <input type="text" id="quantity" value="0" class="form-control text-center" style="width: 50px;">
                            <button type="button" class="btn btn-outline-success" id="btnPlus">+</button>
                          </div>

                        <div class="card mb-0 w-100 border-0">
                            <div class="row g-0">
                              <div class="col-md-6">
                                <div class="card-body p-0">
                                    <h6 style="margin-top: 10px">Harga:</h6>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="card-body  p-0" style="text-align: right">
                                    <h6 id="totalPrice">0</h6>
                                </div>
                              </div>
                            </div>
                          </div>
                        <div>
                        </div>
                        <script>

// JavaScript
var quantityInput = document.getElementById('quantity');
var btnPlus = document.getElementById('btnPlus');
var btnMinus = document.getElementById('btnMinus');
var totalPriceElement = document.getElementById('totalPrice');

var pricePerItem = {{ $produk->price }}; // Harga per item dari API

var quantity = 0; // Jumlah awal
var totalPrice = 0; // Total harga awal

// Fungsi untuk mengupdate harga berdasarkan jumlah
function updatePrice() {
  totalPrice = quantity * pricePerItem;
  totalPriceElement.textContent = ' Rp ' + totalPrice;
}

// Fungsi untuk mengambil data harga dari API

// Event listener untuk tombol plus
btnPlus.addEventListener('click', function() {
  quantity++;
  quantityInput.value = quantity;
  updatePrice();
});

// Event listener untuk tombol minus
btnMinus.addEventListener('click', function() {
  if (quantity > 0) {
    quantity--;
    quantityInput.value = quantity;
    updatePrice();
  }
});

// Event listener untuk perubahan nilai pada input jumlah
quantityInput.addEventListener('change', function() {
  quantity = parseInt(quantityInput.value);
  updatePrice();
});

// Memanggil fungsi fetchPrice untuk mengambil data harga saat halaman dimuat



                        </script>

                    </div>
                    <div class="card-body border-1">
                        <button type="button" class="btn btn-success w-100 mb-2">Keranjang</button>
                        <button type="button" class="btn btn-outline-success w-100">Beli</button>
                    </div>

              </div>
            </div>
          </div>


    </main>
    <footer>
        @include('partials.Home.footerMain')
    </footer>
    {{-- <h1>Hello, world!</h1> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
