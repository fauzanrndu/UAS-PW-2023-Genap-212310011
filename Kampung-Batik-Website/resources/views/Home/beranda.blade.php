<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body class="">
    <header class="">
        @include('partials.home.navbar-beranda')
        <div id="carouselExample" class="carousel slide"data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/img/header.jpg" class="d-block w-100 object-fit-cover" alt="..." style="height:512px " data-bs-interval="3500">
            </div>
            <div class="carousel-item">
              <img src="/img/header.jpg" class="d-block w-100 object-fit-cover" alt="..." style="height:512px " data-bs-interval="3500">
            </div>
            <div class="carousel-item">
              <img src="/img/header.jpg" class="d-block w-100 object-fit-cover" alt="..." style="height:512px " data-bs-interval="3500">
            </div>
          </div>
        </div>
    </header>

    <main class="container p-0 mb-5">
      <div class="card w-100 mb-5 mt-5 border-0">
        <div class="card-body">
          <h5 class="card-title">Desa Wisata Kampung Batik Cibuluh</h5>
          <i class="bi bi-geo-alt fs-6"></i>
          <span class="card-text"><small class="text-body-secondary">Cibuluh, Bogor Utara, Kota Bogor, Jawa Barat</small></span>
        </div>
      </div>

      {{-- Belanja --}}
      <div class="mt-0 mb-5" style="">
        <div class="row g-5">
          <div class="col-md-6">
            <div class="card text-center rounded-0  shadow">
              <i class="bi bi-bag fs-1"></i>
              <div class="card-body">
                <h5 class="card-title">Belanja Produk</h5>
                <p class="card-text"><small class="text-body-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</small></p>
                <a href="/store" class="btn btn-success">Detail</a>
              </div>
            </div>
          </div>
          {{-- kunjungan Wisata --}}
          <div class="col-md-6">
            <div class="card text-center  rounded-0 shadow">
              <i class="bi bi-calendar fs-1"></i>
              <div class="card-body ">
                <h5 class="card-title ">Kunjungan Wisata</h5>
                <p class="card-text"><small class="text-body-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</small></p>
                <a href="/reservasi" class="btn btn-success">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Tentang --}}
      <div class="card  w-100 mb-5 mt-0 rounded-0 border-0" >
        <div class="row g-0">
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title">Tentang</h5>
              <p class="card-text"><small class="text-body-secondary">Kampung Batik Cibuluh adalah Sebuah Program Kampung Wisata Edukasi, yang mengembangkan potensi wilayahnya yaitu Batik, melalui Edukasi dan Ekonomi Kreatif yang Terfokus pada Pembedayaan Kaum Ibu sebagai Kontribusi terhadap Kesetaraan Gender di Indonesia.</small></p>
              <P class="card-text"><small class="text-body-secondary">Kampung Batik Cibuluh di Resmikan pada 24 Agustus 2019 sebagai Kampung Batik pertama di Kota Bogor dan Kawasan Penghasil Batik Cap dan Batik Tulis baik Klasik-Tradisional maupun Kontemporer yang Mengangkat Keanekaragaman Ikon Kota Bogor.</small></P>
              <P class="card-text"><small class="text-body-secondary">Eksistensi Kampung Batik Cibuluh lebih Mengutamakan kepada Padat Karya dimana dalam Proses Produksi Hampir keseluruhan bersifat Manual dan di dalamnya Menerapkan System Pemberdayaan Masyarakat.</small></P>
              <P class="card-text"><small class="text-body-secondary">Kampung Batik Cibuluh terus Mengupayakan terwujudnya 3 Pilar keselarasan pada Ibu Pembatik, Pertama melalui Kotribusi Positif terhadap Lingkungan, Kedua yaitu Keselarasan Peran Sosial di Masyarakat yang di tandai dengan kekompakan dan kerjasama yang Baik, dan yang Ketiga adalah Keselarasan Ekonomi/ Finansial yang di dapatkan.</small></P>
            </div>
          </div>
          <div class="col-md-3 border-0">
            <img src="/img/tentang.png" class="img-fluid " alt="..." style="" >
          </div>
        </div>
      </div>

      {{-- pendiri --}}
      <div class="card mb-5 rounded-0 border-0">
        <div class="row g-0 ">
          <div class="col-md-3">
            <div class="card rounded-0 border-0">
              <img src="/img/pendiri.png" class="img-fluid" alt="...">
            </div>
          </div>
          <div class="col-md-9 m-auto border-0">
            <div class="card-body">
              <p class="card-text"><small class="text-body-secondary">"Kendala demi kendala banyak ditemui ketika kami ingin mengembangkan usaha khususnya di bidang SDM. Pada dasarnya Kota Bogor bukan merupakan daerah penghasil batik seperti daerah-daerah pada umumnya, maka dari itu SDM menjadi faktor kendala utama untuk kami
                                                                      mengembangkan Industri Batik dan melihat banyaknya permasalahan sosial ekonomi di lingkungan sekitar. Sampai akhirnya kami mencoba untuk bersinergi dengan pemerintah daerah untuk memberikan pelatihan serta pendampingan kepada masyarakat sekitar"
                </small></p>
                <h5 class="card-title">- Dina Ayu Widiastuti, S.E.</h5>
                <p class="card-text"><small>Pendiri Desa Wisata Kampung Batik Cibuluh</p>
            </div>
          </div>
        </div>
      </div>

      {{-- filosofi --}}
      <div class="card rounded-0 border-0 mb-5">
        <div class="card-body text-end">
          <h5 class="card-title">Asal usul nama Cibuluh</h5>
          <p class="card-text">Berasal dari kata "Cai Buluh Bambu"</p>
          <p class="card-text"><small class="text-body-secondary">Semacam alat pancuran air  yang dibuat dari batang bambu  yang diletakan di pusat mata air.  konon di lokasi banyak ditumbuhi pohon bambu</small></p>
        </div>
        <img src="/img/bambu.jpg" class="card-img-bottom rounded-0 object-fit-cover" alt="..." style="height:256px;" >
      </div>

      {{-- kegiatan --}}
      <div class="card w-100 text-center  border-0">
        <div class="card-body border-0">
          <h5 class="card-title">kegiatan</h5>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-5 mb-5 ">
        <div class="col">
          <div class="card h-100 rounded-0 shadow">
            <img src="/img/membatik.png" class="card-img-top rounded-0" alt="...">
            <div class="card-body">
              <p class="card-title">Pengalaman Membatik</p>
              <p class="card-text"><small class="text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo culpa recusandae facilis voluptatibus at neque eligendi aliquid explicabo quaerat fugit?</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 rounded-0 shadow">
            <img src="/img/tarian.png" class="card-img-top rounded-0" alt="...">
            <div class="card-body">
              <p class="card-title">Tarian Nusantara</p>
              <p class="card-text"><small class="text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo culpa recusandae facilis voluptatibus at neque eligendi aliquid explicabo quaerat fugit?</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 rounded-0 shadow">
            <img src="/img/wayang.png" class="card-img-top rounded-0" alt="...">
            <div class="card-body">
              <p class="card-title">Pertunjukan Wayang</p>
              <p class="card-text"><small class="text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo culpa recusandae facilis voluptatibus at neque eligendi aliquid explicabo quaerat fugit?</small></p>
            </div>
          </div>
        </div>
      </div>

      {{-- batik --}}
      <div class="card w-100 border-0 mb-5 mt-5">
        <div class="card-body m-auto text-center">
          <p class="card-text">"Batik adalah seni kerajinan tangan yang digambar pada kain <br> dengan  motif yang sangat  cantik dan menarik bahkan lebih cantik lagi  jika kamu yang mengenakannya"</p>
        </div>
      </div>


      {{-- produk --}}
      <div class="card w-100 text-start rounded-0 border-0 mb-0 ">
        <div class="card-body border-0">
          <h5 class="card-title">Produk</h5>
          <p class="card-text"><small class="text-body-secondary">Kampung Batik Cibuluh memiliki 8 brand batik yang membuat batik tulis dan cap. Batiknya cantik, memiliki nilai seni dan kualitas</small></p>
        </div>
      </div>

      <div id="carouselExampleIndicators" class="carousel carousel-dark slide mb-5" data-bs-ride="carousel" data-bs-interval="3500">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card mb-3 w-100 rounded-0  border-0 shadow">
              <div class="row g-0 ">
                <div class="col-md-4">
                  <img src="/img/pancawati.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8 m-auto">
                  <div class="card-body">
                    <p class="card-title">Batik Pancawati</p>
                    <p class="card-text"><small class="text-body-secondary">Batik ini merupakan salah satu batik bogor khususnya di kampung cibuluh yang memiliki makna lima wanita dimana 'panca' berarti lima dan 'wati' berarti wanita yang terinspirasi dari kisah pewayangan. Batik pancawati didirikan atas prakarsa lima orang wanita.</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card mb-3 w-100 rounded-0 shadow border-0">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/img/bumiku.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8 m-auto">
                  <div class="card-body">
                    <p class="card-title">Batik Bumiku</p>
                    <p class="card-text"><small class="text-body-secondary">Batik Bogor Bumiku berdiri tahun 2017, saat ini tergabung kedalam kelompok pengrajin Batik di Kampung Batik Cibuluh Bogor. Batik Bumiku memproduksi batik cap serta batik tulis dengan pewarna sintesis dan pewarna alam.</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card mb-3 w-100 rounded-0 shadow border-0">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/img/gaziseri.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8 m-auto">
                  <div class="card-body">
                    <p class="card-title">Batik Gaziseri</p>
                    <p class="card-text"><small class="text-body-secondary">Banyak orang bertanya kenapa hrs Gaziseri.... Awal terbentuknya kelompok batik di kampung cibuluh krn adanya bantuan dr pihak Baznas yg bekerja sama dgn Ipb jadi dari nama pemberi bantuan itu yg kami ambil.. Gabungan Amil Zakat dan Ipb maka jadilah Gazi dan seri adalah nama" pembatiknya..</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card mb-3 w-100 rounded-0 shadow border-0">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/img/melangit.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8 m-auto">
                  <div class="card-body">
                    <p class="card-title">Batik Melangit</p>
                    <p class="card-text"><small class="text-body-secondary">Motif yang terinspirasi dari bunga rafflesia(bunga bangkai) yang tumbuh indah di kebun raya. Motif ini memiliki makna Rasa kebersamaan dalam keberagaman</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card mb-3 w-100 rounded-0 shadow border-0">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/img/cherry.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8 m-auto">
                  <div class="card-body">
                    <p class="card-title">Batik Cherry</p>
                    <p class="card-text"><small class="text-body-secondary">Batik Cherry melambangkan pohon cheri tumbuh secara alami dirawat dan dihidupi oleh alam. Lalu memberikan manfaat kehidupan pada manusia dan binatang tanpa membedakan. Sama halnya dengan berdirinya Kampung Batik Cibuluh untuk menggali potensi melalui edukasi maupun ekonomi kreatif yang berfokus pada pemberdayaan kaum ibu sebagai bentuk kontribusi terhadap kesetaraan gender untuk melestarikan budaya Indonesia.
                      </small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card mb-3 w-100 rounded-0 shadow border-0">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/img/melinda.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8 m-auto">
                  <div class="card-body">
                    <p class="card-title">Batik Melinda</p>
                    <p class="card-text"><small class="text-body-secondary">Batik Melinda sudah berdiri sejak 10 September 2017 yang didirikan langsung oleh Bu Sartika, terletak di jalan Neglasari, Kelurahan Kampung Cibuluh, Bogor, Jawa Barat. Melinda merupakan singkatan kata yang berasal dari Melestarikan Lingkungan dan Budaya.</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card mb-3 w-100 rounded-0 shadow border-0">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/img/irwanda.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8 m-auto">
                  <div class="card-body">
                    <p class="card-title">Batik Irwanda</p>
                    <p class="card-text"><small class="text-body-secondary">Batik karya "Irwanda Batik" ini bertemakan kekayaan alam semesta yang dipadukan dengan warna merah bata/gerabah yang menggambarkan energi dan kepercayaan diri, energi ini akan dirasakan oleh sang pengguna batik ini.</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card mb-3 w-100 rounded-0 shadow border-0">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/img/sadulur.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8 m-auto">
                  <div class="card-body">
                    <p class="card-title">Batik Sadalur</p>
                    <p class="card-text"><small class="text-body-secondary">Memperkenalkan batik melalui fashion anak muda “Batik Sadulur” memproduksi jenis batik tulis, batik cap, dan kombinasi cap tulis yang dibuat langsung oleh para pengrajinnya sehingga memiliki kualitas yang bagus</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>

      {{-- Fasilitas --}}
      <div class="card w-100 text-center rounded-0 border-0">
        <div class="card-body">
          <h5 class="card-title">Fasilitas</h5>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-6 g-4 mb-5 ">
        <div class="col">
          <div class="card h-100 align-items-center text-center rounded-0 shadow">
            <img src="\img\icon\camera_1998342.png" class="card-img-top mt-4" alt="..." style="width: 38px">
            <div class="card-body">
              {{-- <h5 class="card-title">Tempat Foto</h5> --}}
              <p class="card-text">Tempat Foto</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 align-items-center text-center rounded-0 shadow">
            <img src="\img\icon\parking_1367366.png" class="card-img-top mt-4" alt="..." style="width: 38px">
            <div class="card-body">
              {{-- <h5 class="card-title">Areal Parkir</h5> --}}
              <p class="card-text">Areal Parkir</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 align-items-center text-center rounded-0 shadow">
            <img src="\img\icon\restroom_2388725.png"class="card-img-top mt-4" alt="..." style="width: 38px">
            <div class="card-body">
              {{-- <h5 class="card-title">kamar Mandi Umum</h5> --}}
              <p class="card-text">Kamar Mandi Umum</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 align-items-center text-center rounded-0 shadow">
            <img src="\img\icon\bank_757224.png" class="card-img-top mt-4" alt="..." style="width: 38px">
            <div class="card-body">
              {{-- <h5 class="card-title">Balai Pertemuan</h5> --}}
              <p class="card-text">Balai Pertemuan</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 align-items-center text-center rounded-0 shadow">
            <img src="\img\icon\store_4360494.png" class="card-img-top mt-4" alt="..." style="width: 38px">
            <div class="card-body">
              {{-- <h5 class="card-title">Kios Souvenir</h5> --}}
              <p class="card-text">Kios Souvenir</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 align-items-center text-center rounded-0 shadow">
            <img src="\img\icon\mosque_4470186.png" class="card-img-top mt-4" alt="..." style="width: 38px">
            <div class="card-body">
              {{-- <h5 class="card-title">Rumah Ibadah</h5> --}}
              <p class="card-text">Rumah Ibadah</p>
            </div>
          </div>
        </div>
      </div>

      {{-- blog --}}
      <div class="card w-100 rounded-0 border-0">
        <div class="card-body">
          <h5 class="card-title">Blog</h5>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        <div class="col">
          <div class="card shadow rounded-0">
            <img src="/img/blog1.png" class="card-img-top rounded-0" alt="...">
            <div class="card-body">
              <a href="" class="btn btn-success">Detail</a>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow rounded-0">
            <img src="/img/blog2.png" class="card-img-top rounded-0" alt="...">
            <div class="card-body">
              <a href="" class="btn btn-success">Detail</a>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow rounded-0">
            <img src="/img/blog3.png" class="card-img-top rounded-0" alt="...">
            <div class="card-body">
              <a href="" class="btn btn-success">Detail</a>
          </div>
        </div>
      </div>
    </div>




      {{-- kontak dan lokasi --}}
      <div class="card mb-3 w-100 rounded-0">
        <div class="row g-0">
          <div class="col-md-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.75056400475!2d106.82037881477079!3d-6.553142895260332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c7bb622dce11%3A0x32705060f0a02275!2sKampung%20Batik%20Cibuluh!5e0!3m2!1sen!2sid!4v1688395445948!5m2!1sen!2sid" class="w-100 h-100" style=""  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
          </div>
          <div class="col-md-4" >
            <div class="card-body text-end">
              <h5 class="card-title">Lokasi Desa Wisata</h5>
              <p class="card-text">Kampung Batik Cibuluh Jl.Neglasari 1 No.14 RT 03 RW 04,  Kelurahan Cibuluh Kecamatan Bogor Utara, Kota Bogor, Jawa Barat, 16151</p>
              <h5 class="card-title">Contact Person</h5>
              <div class="mb-3">
                <span class="">+628188289180</span>
                <i class="bi bi-telephone"></i>
                <div></div>
                <span class="card-text">kampungcibuluhofficial@gmail.com</span>
                <i class="bi bi-envelope"></i>
              </div>
              <h5 class="card-title">Jam Operasional</h5>
              <p class="card-text">Senin - Minggu : 08.00 - 16.00</p>
              <h5 class="card-title">Ikuti Kami</h5>
              <a href="https://www.instagram.com/kampungcibuluh/" class="text-dark" target="blank"><i class="bi bi-instagram fs-5 me-3"></i></a>
              <a href="https://www.facebook.com/kampungcibuluh" class="text-dark" target="blank"><i class="bi bi-facebook fs-5 me-3"></i></a>
             <a href="https://www.youtube.com/@kampungcibuluh9471" class="text-dark" target="blank"><i class="bi bi-youtube fs-5"></i></a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="">
        @include('partials.home.footerMain')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  </body>
</html>
