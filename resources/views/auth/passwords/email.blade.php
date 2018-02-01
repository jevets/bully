@extends('bully::layouts.master')

@section('content')
  @component('bully::components.hero')
    @slot('class', 'is-fullheight')
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-narrow">
          <div class="card block">
            <div class="card-header">
              <p class="card-header-title">Reset Password</p>
            </div>
            <div class="card-content">
              @if (session('status'))
                <div class="notification is-success">
                  {{ session('status') }}
                </div>
              @endif
              @include('bully::auth.passwords._form-email')
            </div>
          </div>
          <div class="block has-text-centered">
            <a href="{{ route('login') }}" class="button is-text">
              Login
            </a>
            <a href="{{ route('register') }}" class="button is-text">
              Sign Up
            </a>
          </div>
        </div>
      </div>
    </div>
  @endcomponent
@endsection
