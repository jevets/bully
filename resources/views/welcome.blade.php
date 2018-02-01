@extends('bully::layouts.master')

@push('styles')
<style>
.links {
  font-size: 0.9rem;
}
.links a {
  margin-left: 0.5rem;
  margin-right: 0.5rem;
}
</style>
@endpush

@section('content')
  @component('bully::components.hero')
    @slot('color', 'is-primary')
    @slot('class', 'is-bold is-fullheight')
    @slot('head')
      <div class="container">
        @component('bully::components.navbar')
          @slot('brand', config('app.name', 'Bully'))
          @slot('brandUrl', url('/'))
          @slot('brandClass', 'has-text-weight-bold')
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
      </div>
    @endslot

    <div class="container has-text-centered">
      <p>
        <img src="{{ asset('bully/img/logo--white--480w.png') }}" alt="Bully" width="90">
      </p>
      <h1 class="title is-size-1">
        {{ config('app.name', 'Bully') }}
      </h1>
      <h2 class="subtitle">
        Laravel theme with Bulma, Buefy, and a few helpers
      </h2>
      <div class="links block is-uppercase">
        <a href="https://github.com/jevets/bully">Docs</a>
        <a href="https://bulma.io">Bulma</a>
        <a href="https://buefy.github.io/#/">Buefy</a>
      </div>
    </div>
  @endcomponent
@endsection
