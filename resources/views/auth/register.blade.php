@extends('bully::layouts.master')

@section('content')
  @component('bully::components.hero')
    @slot('class', 'is-fullheight')
    <div class="container">
      <div class="columns is-centered is-vcentered">
        <div class="column is-one-quarter">
          <h1 class="title is-1 has-text-centered">Register</h1>
          <div class="card block">
            <div class="card-content">
              @include('bully::auth._form-register')
            </div>
          </div>
          <div class="block has-text-centered">
            <a href="{{ route('login') }}" class="button is-text">
              Login
            </a>
          </div>
        </div>
      </div>
    </div>
  @endcomponent
@endsection
