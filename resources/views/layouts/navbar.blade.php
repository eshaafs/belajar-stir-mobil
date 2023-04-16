<nav class="navbar navbar-expand-lg navbar-dark bg-primary text-primary-emphasis">
    <div class="container">
      <a class="navbar-brand" href="/">Esha Car Training</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === 'Jadwal' ? 'active' : '' }}" href="/jadwal">Jadwal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === 'Paket' ? 'active' : '' }}" href="/paket">Paket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === 'Tim Kami' ? 'active' : '' }}" href="/tim-kami">Tim Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ $title === 'Kendaraan' ? 'active' : '' }}" href="kendaraan">Kendaraan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ $title === 'Kontak' ? 'active' : '' }}" href="kontak">Kontak</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
        @if (Route::has('login'))
        @auth
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/profile">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          @endif
        @endauth
        @endif
        </ul>
      </div>
    </div>
  </nav>