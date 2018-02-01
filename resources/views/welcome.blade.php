@extends('bully::layouts.master')

@section('content')
<section class="hero is-fullheight is-primary">
  <header class="hero-head">
    <div class="container">
      <nav class="navbar is-primary">
        <div class="navbar-brand">
          <a href="{{ url('/') }}" class="navbar-item has-text-weight-bold">
            {{ config('app.name', 'Bully') }}
          </a>
          <button class="navbar-burger">
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
                <a href="{{ route('login') }}" class="navbar-item">Login</a>
                <a href="{{ route('register') }}" class="navbar-item">Register</a>
              @endauth
            @endif
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title is-1">Bully</h1>
    </div>
  </div>
</section>
@endsection
