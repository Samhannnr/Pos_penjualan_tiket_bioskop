<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
  <a href="{{ url('/') }}" class="navbar-brand d-flex d-lg-none me-4">
    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
  </a>
  <a href="#" class="sidebar-toggler flex-shrink-0">
    <i class="fa fa-bars"></i>
  </a>

  <div class="navbar-nav align-items-center ms-auto">
    <div class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <img class="rounded-circle me-lg-2" src="{{ asset('img/WIN_20241226_21_29_24_Pro.jpg') }}" alt=""
          style="width: 40px; height: 40px" />
        <span class="d-none d-lg-inline-flex">Farel Samhan</span>
      </a>
      <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
        <a href="#" class="dropdown-item">My Profile</a>
        <a href="#" class="dropdown-item">Settings</a>
        <a href="#" class="dropdown-item"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Log Out
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </div>
  </div>
</nav>