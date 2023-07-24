  <nav class="navbar navbar-expand bg-white shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
      <div>
        <img src="/img/icon/logo.png" alt="" style="width: 64px">
      </div>
      <div class="d-flex align-items-center w-100 justify-content-center">
        <div class="dropdown">
            <a class="dropdown-toggle text-decoration-none text-dark" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="true">
              Kategori
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        <form class="d-flex w-50 me-5 ms-5" role="search">
          <input class="form-control rounded-0"  type="search" placeholder="Pakaian" aria-label="Search">
          <button class="btn btn-outline-dark rounded-0" type="submit">Cari</button>
        </form>
        <a class="navbar-brand" href="#">
          <img src="/img/icon/shopping-online.png" alt="" style="width: 30px; height: 30px" >
        </a>
      </div>
      <div>
        @auth
        <div class="d-flex align-items-center">
          <a class="nav-link active me-3" aria-current="page" href="#">Halo {{ auth()->user()->name }}</a>
          <form action="/signout" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-success rounded-0 btn-sm"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
          </form>
        </div>
        @else
        <form class="">
          <a href="/sign-in" class="btn btn-outline-success rounded-0 ">Login</a>
        </form>
        @endauth
      </div>
    </div>
  </nav>

