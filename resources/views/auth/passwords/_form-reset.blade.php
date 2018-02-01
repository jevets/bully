<form action="{{ route('password.request') }}" method="POST">
  {{ csrf_field() }}

  <input type="hidden" name="token" value="{{ $token }}">

  <div class="field">
    <label for="email" class="label sr-only">Email</label>
    <div class="control has-icons-left">
      <input type="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" id="email" placeholder="Your Email" required autofocus value="{{ $email or old('email') }}">
      <span class="icon is-left">
        <i class="fa fa-envelope"></i>
      </span>
    </div>
    @if ($errors->has('email'))
      <p class="help is-danger">{{ $errors->first('email') }}</p>
    @endif
  </div>

  <div class="field">
    <label for="password" class="label sr-only">New Password</label>
    <div class="control has-icons-left">
      <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password" placeholder="New Password" required>
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
      <input type="password" name="password_confirmation" id="password-confirm" class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" placeholder="Confirm New Password" required>
      <span class="icon is-small is-left">
        <i class="fa fa-lock"></i>
      </span>
    </div>
  </div>

  <div class="field">
    <button type="submit" class="button is-info is-fullwidth">
      Reset Password
    </button>
  </div>
</form>
