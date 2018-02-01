@extends('bully::layouts.master')

@section('content')
  @component('bully::components.layouts.hero-narrow-card')
    @slot('title', 'Register')

    @section('register.form')
    <form method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}

      <div class="field">
        <label for="name" class="label sr-only">Name</label>
        <div class="control has-icons-left">
          <input type="text" name="name" id="name" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" placeholder="Your Name" value="{{ old('name') }}" required autofocus>
          <span class="icon is-small is-left">
            <i class="fa fa-user"></i>
          </span>
        </div>
        @if ($errors->has('name'))
          <p class="help is-danger">{{ $errors->first('name') }}</p>
        @endif
      </div>

      <div class="field">
        <label for="email" class="label sr-only">Email</label>
        <div class="control has-icons-left">
          <input type="text" name="email" id="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" placeholder="Your Email" value="{{ old('email') }}" required>
          <span class="icon is-small is-left">
            <i class="fa fa-envelope"></i>
          </span>
        </div>
        @if ($errors->has('email'))
          <p class="help is-danger">{{ $errors->first('email') }}</p>
        @endif
      </div>

      <div class="field">
        <label for="password" class="label sr-only">Password</label>
        <div class="control has-icons-left">
          <input type="password" name="password" id="password" class="input {{ $errors->has('password') ? 'is-danger' : '' }}" placeholder="Your Password" required>
          <span class="icon is-small is-left">
            <i class="fa fa-lock"></i>
          </span>
        </div>
        @if ($errors->has('password'))
          <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif
      </div>

      <div class="field">
        <label for="password-confirm" class="label sr-only">Confirm Password</label>
        <div class="control has-icons-left">
          <input type="password" name="password_confirmation" id="password-confirm" class="input" placeholder="Confirm Password" required>
          <span class="icon is-small is-left">
            <i class="fa fa-lock"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <button type="submit" class="button is-info is-fullwidth">
          Register
        </button>
      </div>
    </form>
    @show

    @slot('foot')
      <a href="{{ route('login') }}" class="button is-text">
        Login
      </a>
    @endslot
  @endcomponent
@endsection
