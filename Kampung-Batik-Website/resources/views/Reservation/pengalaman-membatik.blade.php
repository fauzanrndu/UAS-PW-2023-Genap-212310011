<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <style>
  .card:hover {
    cursor: pointer;
  }
  .card.selected {
    background-color: green;
  }
  .card.selected .form-check-input {
    visibility: visible;
  }
  .card-img-top {
    transition: transform 0.2s ease-in-out;
  }
  .card.selected .card-img-top {
    transform: scale(1.1);
  }
  .form-check-input {
    display: none;
  }
  .card.selected .form-check-label {
    color: white;
  }
</style>

  <body>
    <header class="mb-5">
        @include('partials.Reservation.navbar-reservasi')
    </header>

    <main class="container mb-5">
        {{-- gambar header --}}
        <img src="/img/membatik.png" alt="" class="object-fit-cover w-100" style="height:512px">

        <div class="card rounded-0 bg-success mb-5">
            <div class="card-body">
             <h5 class="card-title text-white">Pengalaman Membatik</h5>
            </div>
          </div>

          <div class="card mb-3 w-100">
            <div class="row g-0">
              <div class="col-md-12">
                <div class="card-body shadow">
                    <div class="">
                        <h1>Form Reservasi</h1>
                        <div class="card mb-3 border-0">
                        <div class="row g-0">
                            <form class="row g-3">
                                @csrf
                                <div class="col-md-6">
                                  <label for="inputPaket" class="form-label">Pilih Paket</label>
                                  <select id="inputPaket" class="form-select">
                                    <option selected>Pilih paket...</option>
                                    <option value="1">Paket Handkerchief</option>
                                    <option value="2">Paket Totebag</option>
                                    <option value="3">Paket Cloth</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  <label for="inputTanggal" class="form-label">Tanggal</label>
                                  <input type="date" class="form-control" id="inputTanggal">
                                </div>
                                <div class="col-md-6">
                                  <label for="inputJam" class="form-label">Jam</label>
                                  <input type="time" class="form-control" id="inputJam">
                                </div>
                                    <div class="col-md-3">
                                      <label for="jumlah_orang">Jumlah Orang:</label>
                                      <div class="input-group">
                                        <button type="button" id="minusBtn" class="btn btn-secondary">-</button>
                                        <input type="number" id="jumlah_orang" name="jumlah_orang" min="10" value="10" class="form-control" readonly>
                                        <button type="button" id="plusBtn" class="btn btn-secondary">+</button>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <label for="harga">Harga:</label>
                                      <input type="text" id="harga" class="form-control" readonly>
                                    </div>
                                    <script>
                                        var paketSelect = document.getElementById('inputPaket');
                                        var jumlahOrangInput = document.getElementById('jumlah_orang');
                                        var hargaInput = document.getElementById('harga');

                                        paketSelect.addEventListener('change', function() {
                                          var selectedPaket = paketSelect.value;
                                          var hargaPerOrang = 0;

                                          if (selectedPaket === '1') {
                                            hargaPerOrang = 50000;
                                          } else if (selectedPaket === '2' || selectedPaket === '3') {
                                            hargaPerOrang = 90000;
                                          }

                                          var jumlahOrang = parseInt(jumlahOrangInput.value);
                                          var totalHarga = jumlahOrang * hargaPerOrang;
                                          hargaInput.value = 'Rp ' + totalHarga;
                                        });

                                        var minusBtn = document.getElementById('minusBtn');
                                        var plusBtn = document.getElementById('plusBtn');

                                        minusBtn.addEventListener('click', function() {
                                          var jumlahOrang = parseInt(jumlahOrangInput.value);
                                          if (jumlahOrang > 10) {
                                            jumlahOrang--;
                                            jumlahOrangInput.value = jumlahOrang;
                                            updateHarga();
                                          }
                                        });

                                        plusBtn.addEventListener('click', function() {
                                          var jumlahOrang = parseInt(jumlahOrangInput.value);
                                          jumlahOrang++;
                                          jumlahOrangInput.value = jumlahOrang;
                                          updateHarga();
                                        });

                                        function updateHarga() {
                                          var jumlahOrang = parseInt(jumlahOrangInput.value);
                                          var hargaPerOrang = 0;

                                          var selectedPaket = paketSelect.value;
                                          if (selectedPaket === '1') {
                                            hargaPerOrang = 50000;
                                          } else if (selectedPaket === '2' || selectedPaket === '3') {
                                            hargaPerOrang = 90000;
                                          }

                                          var totalHarga = jumlahOrang * hargaPerOrang;
                                          hargaInput.value = 'Rp ' + totalHarga;
                                        }
                                      </script>
<div class="col-md-12">
  <label for="metodePembayaran" class="form-label">Metode Pembayaran</label>
  <div class="row">
    <div class="col-md-6">
      <div class="card" onclick="toggleCardSelection(this, 'bank')">
        <div class="card-body">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="metodePembayaran" id="bank" value="bank" checked>
            <label class="form-check-label" for="bank">
              Bank
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card" onclick="toggleCardSelection(this, 'e-wallet')">
        <div class="card-body">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="metodePembayaran" id="e-wallet" value="e-wallet">
            <label class="form-check-label" for="e-wallet">
              E-wallet
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function toggleCardSelection(card, selectedId) {
    var cards = card.parentElement.parentElement.querySelectorAll('.card');
    cards.forEach(function(card) {
      card.classList.remove('selected');
    });

    card.classList.add('selected');
    var radioInput = card.querySelector('.form-check-input');
    radioInput.checked = true;
  }
</script>
<div class="card-body">
  <button type="submit" class="btn btn-success btn-block w-100">Booking</button>
</div>

          {{-- kalimat --}}
          <div class="card rounded-0  mb-5 border-0">
            <div class="card-body">
             {{-- <h5 class="card-title">Pengalaman Membatik</h5> --}}
             <p class="card-text text-start"><small class="text-body-secondary">Merasa tertarik untuk belajar membuat batik secara langsung? Jangan khawatir, kamu bisa mengikuti pelatihan singkat untuk membuat batik sendiri di sini.
                Kegiatan membuat batik benar-benar menyenangkan dan membuat liburan kamu makin berkesan. Kamu pun akan lebih mencintai dan menghargai warisan budaya Indonesia karena tahu seberapa rumitnya proses di balik terciptanya satu kain batik.</small></p>
            </div>
          </div>
          <div class="card-body">
            <div class="card mb-0 border-0">
                <div class="card-body text-center">
                  <h5 class="text-title">Batik Education Package</h5>
                </div>
              </div>

                <div class="row row-cols-3 row-cols-md-3 g-4">
                    @foreach ($reservasi as $item)
                    <div class="col">
                      <div class="card h-100">
                        <a href=""{{ $item->id }}"><img src="{{ $item->image }}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                          <h5 class="card-title">{{ $item->name }}</h5>
                          <p class="card-text">Rp. {{ $item->description }}</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
          </div>
</main>

<footer>
    @include('partials.Home.footerMain')
 </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
