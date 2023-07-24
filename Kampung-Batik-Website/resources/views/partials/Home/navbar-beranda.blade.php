<nav class="navbar navbar-expand bg-white shadow">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="">
        <img src="/img/icon/logo.png" alt="" style="width: 64px">
      </div>
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show w-25 rounded-0" role="alert">
          {{ session('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
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
  </nav>
