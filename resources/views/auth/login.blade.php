@extends('bully::layouts.app')

@section('navbar', false)

@section('content')
  @component('bully::components.hero')
    @slot('class', 'is-fullheight')
    <div class="container">
      <div class="columns is-centered is-vcentered">
        <div class="column is-one-quarter">
          <h1 class="title is-1 has-text-centered">Login</h1>
          <div class="card block">
            <div class="card-content">
              @include('bully::auth._form-login')
            </div>
          </div>
          <div class="block has-text-centered">
            <a href="{{ route('register') }}" class="button is-text">
              Sign Up
            </a>
            <a href="{{ route('password.request') }}" class="button is-text">
              Forgot Password
            </a>
          </div>
        </div>
      </div>
    </div>
  @endcomponent
@endsection
