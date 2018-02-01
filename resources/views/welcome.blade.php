@extends('bully::layouts.master')

@section('content')
  @component('bully::components.hero', ['class' => 'is-fullheight is-light'])
    @slot('head')
      <div class="container">
        @component('bully::components.navbar')
          @slot('brand', config('app.name', 'Bully'))
          @slot('brandUrl', url('/'))
          @slot('brandClass', 'has-text-weight-bold')
          @slot('start')
            <a href="#" class="navbar-item">Start Item</a>
            <a href="#" class="navbar-item">Start Item</a>
            <a href="#" class="navbar-item">Start Item</a>
          @endslot
          @slot('end')
            @if (Route::has('login'))
              @auth
                <a href="{{ url('/home') }}" class="navbar-item">Home</a>
              @else
                <a href="{{ route('login') }}" class="navbar-item">Login</a>
                <a href="{{ route('register') }}" class="navbar-item">Register</a>
              @endauth
            @endif
          @endslot
        @endcomponent
        {{--
        <nav class="navbar is-light">
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
        --}}
      </div>
    @endslot

    <div class="container has-text-centered">
      <h1 class="title is-1">Bully</h1>
    </div>
  @endcomponent
@endsection
