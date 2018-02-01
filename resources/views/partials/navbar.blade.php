<nav class="navbar is-info">
  <div class="navbar-brand">
    <a href="{{ url('/') }}" class="navbar-item has-text-weight-bold">
      {{ config('app.name', 'Bully') }}
    </a>
    <button class="button navbar-burger is-info">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
  <div class="navbar-menu">
    <div class="navbar-end">
      @if (Route::has('login'))
        @auth
          <a href="{{ url('/home') }}" class="navbar-item">Home</a>
        @else
          <a href="{{ route('login') }}" class="navbar-item {{ Route::is('login') ? 'is-active' : '' }}">
            Login
          </a>
          <a href="{{ route('register') }}" class="navbar-item {{ Route::is('register') ? 'is-active' : '' }}">Register</a>
        @endauth
      @endif
    </div>
  </div>
</nav>
