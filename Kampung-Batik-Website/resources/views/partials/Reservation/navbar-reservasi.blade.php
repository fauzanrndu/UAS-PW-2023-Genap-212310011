<nav class="navbar navbar-expand bg-white shadow-sm">
    <div class="container mt">
      <img src="/img/icon/logo.png" alt="" style="width: 64px">
      <div class="">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/detail-booking">Cek Reservasi</a>
          </li>
        </ul>
      </div>
      <div>
        @auth
        <div class="d-flex align-items-center">
          <a class="nav-link active me-3" aria-current="page" href="#">Halo {{ auth()->user()->name }}</a>
          <form action="/signout" method="POST" >
            @csrf
            <button type="submit" class="btn btn-outline-success rounded-0 btn-sm"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
          </form>
        </div>
      @else
        <form class="">
          <a href="/sign-in" class="btn btn-outline-success rounded-0">Login</a>
        </form>
      @endauth
      </div>
    </div>
  </nav>
