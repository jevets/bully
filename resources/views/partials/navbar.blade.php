@component('bully::components.navbar')

  @slot('brand', config('app.name', 'Bully'))
  @slot('brandClass', 'has-text-weight-bold')

  @slot('end')
    @if (Route::has('login'))
      @auth
        <a href="{{ url('/home') }}" class="navbar-item">
          Home
        </a>
        <a href="{{ route('logout') }}" class="navbar-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      @else
        <a href="{{ route('login') }}" class="navbar-item {{ Route::is('login') ? 'is-active' : '' }}">
          Login
        </a>
        <a href="{{ route('register') }}" class="navbar-item {{ Route::is('register') ? 'is-active' : '' }}">
          Register
        </a>
      @endauth
    @endif
  @endslot
@endcomponent
