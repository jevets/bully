@extends('bully::layouts.master')

@section('content')
  @component('bully::components.layouts.hero-narrow-card')
    @slot('title', 'Login')

    @section('login.form')
    <form method="POST" action="{{ route('login') }}" novalidate>
      {{ csrf_field() }}
      <div class="field">
        <label for="email" class="label sr-only">Email</label>
        <div class="control has-icons-left">
          <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required autofocus>
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
          <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password" placeholder="Your Password" required>
          <span class="icon is-small is-left">
            <i class="fa fa-lock"></i>
          </span>
        </div>
        @if ($errors->has('password'))
          <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif
      </div>

      <div class="field">
        <div class="control">
          <label for="remember" class="checkbox">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            Remember Me
          </label>
        </div>
      </div>
      <div class="field">
        <button type="submit" class="button is-info is-fullwidth">
          Login
        </button>
      </div>
    </form>
    @show

    @slot('foot')
      <a href="{{ route('register') }}" class="button is-text">
        Sign Up
      </a>
      <a href="{{ route('password.request') }}" class="button is-text">
        Forgot Password
      </a>
    @endslot
  @endcomponent
@endsection
