@extends('layouts.app') 
@section('title') reset password form
@endsection
 
@section('content')


<div class="columns">
  <div class="column is-three-fifths is-offset-one-fifth m-t-40">
    <div class="card login">
      <div class="card-content">
        <h1 class="title is-uppercase has-text-weight-bold has-text-centered">Reset Your Password</h1>
        <form method="POST" action="{{ route('password.request') }}">
          {{ csrf_field() }}

          <input type="hidden" name="token" value="{{ $token }}">
          <div class="field">
            <label class="label" for="email">Email Address</label>
            <p class="content">
              <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="text" name="email" id="email" placeholder="email@example.com"
                value="{{ $email or old('email') }}" required> @if ($errors->has('email'))
              <span class="help">
                <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
             </span> @endif
            </p>
          </div>
          <div class="field">
            <label class="label" for="password">Password</label>
            <p class="content">
              <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" id="password" placeholder="password"
                required> @if ($errors->has('password'))
              <span class="help">
                <strong class="has-text-danger">{{ $errors->first('password') }}</strong>
              </span> @endif
            </p>
          </div>
          <div class="field">
            <label class="label" for="password-confirm">Confirm Password</label>
            <p class="content">
              <input class="input {{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" type="password" name="password_confirmation"
                id="password-confirm" placeholder="confirm password"> @if ($errors->has('password_confirmation'))
              <span class="help">
                <strong class="has-text-danger">{{ $errors->first('password_confirmation') }}</strong>
              </span> @endif
            </p>
          </div>
          <button class="button is-link is-outlined is-fullwidth m-t-30">Reset Password</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection