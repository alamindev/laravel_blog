@extends('layouts.app') 
@section('title') Login form
@endsection
 
@section('main-content')
<div class="columns">
  <div class="column is-half is-offset-one-quarter m-t-40">
    <div class="card login">
      <div class="card-content">
        <h1 class="title is-uppercase has-text-weight-bold has-text-centered">Log In</h1>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="field">
            <label class="label" for="email">Email</label>
            <p class="content">
              <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="text" name="email" id="email" placeholder="name@example.com"
                value="{{ old('email') }}"> @if ($errors->has('email'))
              <span class="help">
                 <strong class="has-text-danger">{{ $errors->first('email') }}</strong>
              </span> @endif
            </p>
          </div>
          <div class="field">
            <label class="label" for="password">Password</label>
            <p class="content">
              <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" id="password" placeholder="******">              @if ($errors->has('password'))
              <span class="help">
                 <strong class="has-text-danger">{{ $errors->first('password') }}</strong>
              </span> @endif
            </p>
          </div>
          <b-checkbox name="remember" {{ old( 'remember') ? 'checked' : '' }} class="m-t-20">Remember Me</b-checkbox>
          <button class="button is-primary is-outlined is-fullwidth m-t-30">Login</button>
        </form>
        <p class="has-text-centered m-t-30 m-b-10">
          <a class="social-login" href=""><span class="icon"><i class="fa fa-facebook"></i></span></a>
          <a class="social-login" href=""><span class="icon"><i class="fa fa-twitter"></i></span></a>
          <a class="social-login" href=""><span class="icon"><i class="fa fa-github"></i></span></a>
          <a class="social-login" href=""><span class="icon"><i class="fa fa-google"></i></span></a>
        </p>
      </div>
    </div>
    <h5 class="has-text-centered m-t-10"> <a class="is-muted" href="{{ route('password.request') }}">
        Forgot Your Password?
    </a></h5>
  </div>
</div>
@endsection