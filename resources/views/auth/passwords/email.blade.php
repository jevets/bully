@extends('bully::layouts.master')

@section('content')
  @component('bully::components.layouts.hero-narrow-card')
    @slot('columnWidth', 'is-one-third')
    @slot('title', 'Reset Password')

    <form action="{{ route('password.email') }}" method="POST">
      {{ csrf_field() }}

      <div class="field">
        <label for="email" class="label sr-only">Email</label>
        <div class="control has-icons-left">
          <input type="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" id="email" placeholder="Your Email" required autofocus value="{{ old('email') }}">
          <span class="icon is-left">
            <i class="fa fa-envelope"></i>
          </span>
        </div>
        @if ($errors->has('email'))
          <p class="help is-danger">{{ $errors->first('email') }}</p>
        @endif
      </div>

      <div class="field">
        <div class="control">
          <button type="submit" class="button is-info is-fullwidth">
            Send Password Reset Link
          </button>
        </div>
      </div>
    </form>

    @slot('foot')
      <a href="{{ route('login') }}" class="button is-text">
        Login
      </a>
      <a href="{{ route('register') }}" class="button is-text">
        Sign Up
      </a>
    @endslot
  @endcomponent
@endsection
