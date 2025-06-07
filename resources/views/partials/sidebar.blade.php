<div class="sidebar pe-4 pb-3">
  <nav class="navbar bg-secondary navbar-dark">
    <a href="{{ url('/') }}" class="navbar-brand mx-4 mb-3">
      <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>FIX ID </h3>
    </a>
    <div class="d-flex align-items-center ms-4 mb-4">
      <div class="position-relative">
        <img class="rounded-circle" src="{{ asset('img/WIN_20241226_21_29_24_Pro.jpg') }}" alt="" style="width: 40px; height: 40px" />
        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
      </div>
      <div class="ms-3">
        <h6 class="mb-0">Farel Samhan</h6>
        <span>Admin</span>
      </div>
    </div>

    <div class="navbar-nav w-100">
      @if(auth()->user() && auth()->user()->role == 'admin')
      <a href="{{ route('dashboard.home') }}" class="nav-item nav-link active">
      <i class="fa fa-tachometer-alt me-2"></i>Dashboard
      </a>
      <a href="{{ route('film.index') }}" class="nav-item nav-link active">
      <i class="fa fa-film me-2"></i>Film
      </a>
      <a href="{{ route('jadwal.index') }}" class="nav-item nav-link active">
      <i class="fa fa-calendar me-2"></i>Jadwal
      </a>
      <a href="{{ route('studio.index') }}" class="nav-item nav-link active">
      <i class="fa fa-tv me-2"></i>Studio
      </a>
    @endif

      <a href="{{ route('tiket.index') }}" class="nav-item nav-link active"><i
          class="fa fa-tachometer-alt me-2"></i>tiket</a>
      <a href="{{ route('pembayaran.index') }}" class="nav-item nav-link active"><i
          class="fa fa-tachometer-alt me-2"></i>pembayaran</a>
    </div>
  </nav>
</div>